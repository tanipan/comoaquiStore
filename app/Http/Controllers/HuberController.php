<?php

namespace App\Http\Controllers;

use Mapper;
use App\Models\Huber;
use App\Jobs\SendEmailJob;
//use App\Mail\HuberCreated;
//use GoogleMaps\GoogleMaps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateHuberRequest;
use TeamPickr\DistanceMatrix\DistanceMatrix;
use TeamPickr\DistanceMatrix\Licenses\StandardLicense;

class HuberController extends Controller
{
    public function index(Request $request)
    {
        switch (request('orderBy')) {
            case 1:
                $field = "created_at";
                $order = "asc";
                break;
            case 2:
                $field = "created_at";
                $order = "desc";
                break;
            case 3:
                $field = "updated_at";
                $order = "asc";
                break;
            case 4:
                $field = "updated_at";
                $order = "desc";
                break;
        }

        if (request('status') == -1) {
            $status = 0;
        } else {
            $status = request('status');
        }

        $test = false;


        $hubers = Huber::where("id", ">=", 0);

        //OrderBy
        if (request('orderBy')) {
            //echo "entra1" . request('orderBy');
            $hubers->orderBy($field, $order);
        }

        //Town
        if (request('town')) {
            //echo "entra2" . request('town');
            $hubers->where("town", request('town'));
        }

        //CP
        if (request('cp')) {
            //echo "entra3" . request('cp');
            $hubers->where("cp", request('cp'));
        }

        //Status
        if (request('status')) {
            //echo "entra4" . request('status');
            $hubers->where("validate", (string)$status);
        }

        //Busqueda
        if (request('search')) {
            //echo "entra4" . request('status');
            $hubers->where("name", "like", "%" . request('search') . "%");
            $hubers->orWhere("lastname", "like", "%" . request('search') . "%");
            $hubers->orWhere("phone", "like", "%" . request('search') . "%");
            $hubers->orWhere("email", "like", "%" . request('search') . "%");
        }

        $hubers = $hubers->paginate(20);

        $towns = $this->getAllTowns();
        $cps = $this->getAllCP();

        return view("admin.huber.index", compact('hubers', 'towns', 'cps'));
    }

    public function getAllTowns()
    {
        $sql = "select town, count(*) num 
        from hubers 
        where deleted_at is null
        group by town";
        $towns = DB::select($sql);

        return $towns;
    }

    public function getAllCP()
    {
        $cps = DB::table('hubers')
            ->select(DB::raw('count(*) as num, cp'))
            ->whereNull('deleted_at')
            ->groupBy('cp')
            ->orderBy('cp')
            ->get();

        return $cps;
    }

    public function test2()
    {
        $response = \GoogleMaps::load('geocoding')
            ->setParam(['address' => 'domingo gomez 59, abaran, 30550, murcia'])
            ->get();
        $coordenadas = (json_decode($response, 1));

        if (isset($coordenadas['results'][0]['geometry']['location'])) {
            $lat = $coordenadas['results'][0]['geometry']['location']['lat'];
            $lon = $coordenadas['results'][0]['geometry']['location']['lng'];
        } else {
            $lat = 0;
            $lng = 0;
        }
    }

    public function test()
    {

        $license = new StandardLicense(env("GOOGLE_MAPS_KEY"));
        $response = DistanceMatrix::license($license)
            ->addOrigin('38.20763138991505, -1.397703008560164')
            ->addDestination('38.22974951810067, -1.3278368305131019')
            ->addDestination('38.20763138991505, -1.397703008560164')
            ->request();

        // I want to make the following but of API better,
        // as it looks horrible at the moment.
        $rows = $response->rows();
        $elements = $rows[0]->elements();
        $element = $elements[0];

        $distance = $element->distance();
        $distanceText = $element->distanceText();
        $duration = $element->duration();
        echo $durationText = $element->durationText();
        $durationInTraffic = $element->durationInTraffic();
        $durationInTrafficText = $element->durationInTrafficText();




        dd();
        $license = new StandardLicense(env("GOOGLE_MAPS_KEY"));

        //$request = DistanceMatrix::license($license);

        $response = new DistanceMatrix($license);
        $response->addOrigin('38.20763138991505, -1.397703008560164');
        $response->addDestination('38.22974951810067, -1.3278368305131019');

        $response->request();

        //dd($response->getTransitRoutingPreference());

        // I want to make the following but of API better,
        // as it looks horrible at the moment.
        //$rows = $response->rows();
        //$elements = $rows[0]->elements();
        //$element = $elements[0];

        dd($response->getArrivalTime());

        //echo $distance = $element->distance();        
        echo $distanceText = $element->distanceText();
        echo "<br>";
        echo $durationText = $element->durationText();
    }

    public function create()
    {
        return view("admin.huber.create");
    }

    public function store(CreateHuberRequest $request)
    {
        $huber = Huber::create($request->all());
        $huber->token = Str::random(32);
        $huber->save();

        //Mail
        dispatch(new SendEmailJob($huber->email, $huber, 1));
        //Mail::to("tanipan@gmail.com")->send(new HuberCreated());

        return redirect()->route('home');
    }

    public function existHubber($email, $phone)
    {
        $hubber = Huber::where('email', "=", trim($email))
            ->Where('phone', "=", trim($phone))
            ->first();

        return (bool)$hubber;
    }

    public function createhuber(Request $request)
    {
        $datos_recibidos = $request->all();
        $datos_recibidos['province'] = $this->getProvince(request('cp'));


        //Comprobamos si el email o el telefono ya existen para no crear el hubber
        if ($this->existHubber(request('email'), request('phone'))) {
            return;
        }

        //Sacamos las coordenadas de la dirección
        $direccion = request('address') . ", " . request('town') . ", " . request('cp') . ", " . $datos_recibidos['province'] . ", ";
        $coordenadas = $this->getAddressCoordinates($direccion);
        $datos_recibidos['lat'] = $coordenadas['lat'];
        $datos_recibidos['lon'] = $coordenadas['lon'];

        //Creamos el huber
        $huber = Huber::create($datos_recibidos);
        $huber->token = Str::random(32);
        $huber->save();

        //Mail
        $plantilla = 1;
        dispatch(new SendEmailJob($huber->email, $huber, $plantilla));
    }

    public function testMail()
    {
        $huber = Huber::find(1);

        //Mail
        dispatch(new SendEmailJob("miguelpelegrin@gmail.com", $huber, 1));
        //Mail::to("tanipan@gmail.com")->send(new HuberCreated());

        //return redirect()->route('home');
    }

    public function testMailWeb()
    {
        $huber = Huber::find(1);

        return view("mail.huber-created", compact('huber'));
    }

    public function show(Huber $huber)
    {

        Mapper::map($huber->lat, $huber->lon);

        return view("admin.huber.show", compact('huber'));
    }

    public function edit(Huber $huber)
    {
        return view('admin.huber.edit', compact('huber'));
    }

    public function update(CreateHuberRequest $request, Huber $huber)
    {
        //Sacamos las coordenadas de la dirección
        $direccion = request('address') . ", " . request('town') . ", " . request('cp') . ", " . $this->getProvince(request('cp')) . ", ";
        $coordenadas = $this->getAddressCoordinates($direccion);

        //Comparamos si se le ha cambiado el estado de la validación
        if ($huber->validate != request("validate")) {
            if (request("validate") == 1) {
                //Mail
                $plantilla = 2; //Enhorabuena
                dispatch(new SendEmailJob(request("email"), $huber, $plantilla));
            } elseif (request("validate") == 2) {
                //Mail
                $plantilla = 4; //Lo sentimos
                dispatch(new SendEmailJob(request("email"), $huber, $plantilla));
            }
        }

        $huber->name = request("name");
        $huber->lastname = request("lastname");
        $huber->email = request("email");
        $huber->phone = request("phone");
        $huber->town = request("town");
        $huber->cp = request("cp");
        $huber->province = $this->getProvince(request('cp'));
        $huber->address = request("address");
        $huber->address_extender = request("address_extender");
        $huber->message = request("message");

        $huber->validate = request("validate");
        $huber->validate_message = request("validate_message");

        $huber->lat = $coordenadas['lat'];
        $huber->lon = $coordenadas['lon'];

        $huber->works = request("works");
        $huber->workingModality = request("workingModality");
        $huber->typeRoom = request("typeRoom");
        $huber->floor = request("floor");
        $huber->elevator = request("elevator");
        $huber->knowUs = request("knowUs");
        $huber->meters = request("meters");
        $huber->comments = request("comments");

        $huber->save();

        return redirect()->route('admin.huber.show', $huber);
    }

    public function destroy(Huber $huber)
    {
        $huber->delete();

        return redirect()->route('admin.huber.list');
    }

    public function mapsShowAllHubers()
    {
        $hubers = Huber::all();

        Mapper::map(40.4172093, -3.702427600000001); //Puerta del son de Madrid

        foreach ($hubers as $huber) {

            switch ($huber->validate) {
                case 0: //Pendiente
                    $estado = "Pendiente";
                    $color1 = 'red';
                    $color = "red-dot.png";
                    $url_ico = "https://dingdonehubs.com/iconos-maps/Pendiente.png";
                    break;
                case 1: //Vaalido
                    $estado = "Válido";
                    $color1 = 'green';
                    $color = "green-dot.png";
                    $url_ico = "https://dingdonehubs.com/iconos-maps/Valido.png";
                    break;
                case 3: //En proceso
                    $estado = "En proceso";
                    $color1 = 'orange';
                    $color = "yellow-dot.png";
                    $url_ico = "https://dingdonehubs.com/iconos-maps/En_Proceso.png";
                    break;
                case 2: //No válido
                    $estado = "No válido";
                    $color1 = 'gray';
                    $color = "blue-dot.png";
                    $url_ico = "https://dingdonehubs.com/iconos-maps/No_Valido.png";
                    break;
                case 4: //Contratado
                    $estado = "Contratado";
                    $color1 = 'purple';
                    $color = "purple-dot.png";
                    $url_ico = "https://dingdonehubs.com/iconos-maps/Contratado.png";
                    break;
            }


            $Texto = "
                <h5>" . $huber->name . " " . $huber->lastname . "</h5>
                <h6>" . $huber->address . "</h6>
                <p>" . $huber->town . " (" . $huber->province . ")</p>
                <p><a href='" . route('admin.huber.show', $huber) . "'>Ir a la ficha del hubber</a></p>
                <p style='color: " . $color1 . ";'>" . $estado . "</p>
            ";

            //Mapper::informationWindow($huber->lat, $huber->lon, $Texto, ['icon' => "http://maps.google.com/mapfiles/ms/icons/" . $color]);
            Mapper::informationWindow($huber->lat, $huber->lon, $Texto, ['icon' => $url_ico]);
        }

        return view("admin.huber.maps");
    }

    private function getProvince($CP)
    {

        $cps = [
            "01" => "Álava",
            "02" => "Albacete",
            "03" => "Alicante",
            "04" => "Almería",
            "05" => "Ávila",
            "06" => "Badajoz",
            "07" => "Baleares",
            "08" => "Barcelona",
            "09" => "Burgos",
            "10" => "Cáceres",
            "11" => "Cádiz",
            "12" => "Castellón",
            "13" => "Ciudad Real",
            "14" => "Córdoba",
            "15" => "La Coruña",
            "16" => "Cuenca",
            "17" => "Gerona/Girona",
            "18" => "Granada",
            "19" => "Guadalajara",
            "20" => "Guipúzcoa",
            "21" => "Huelva",
            "22" => "Huesca",
            "23" => "Jaén",
            "24" => "León",
            "25" => "Lérida/Lleida",
            "26" => "La Rioja",
            "27" => "Lugo",
            "28" => "Madrid",
            "29" => "Málaga",
            "30" => "Murcia",
            "31" => "Navarra",
            "32" => "Orense",
            "33" => "Asturias",
            "34" => "Palencia",
            "35" => "Las Palmas",
            "36" => "Pontevedra",
            "37" => "Salamanca",
            "38" => "Santa Cruz de Tenerife",
            "39" => "Cantabria",
            "40" => "Segovia",
            "41" => "Sevilla",
            "42" => "Soria",
            "43" => "Tarragona",
            "44" => "Teruel",
            "45" => "Toledo",
            "46" => "Valencia",
            "47" => "Valladolid",
            "48" => "Vizcaya",
            "49" => "Zamora",
            "50" => "Zaragoza",
            "51" => "Ceuta",
            "52" => "Melilla"
        ];

        $cp = substr($CP, 0, 2);

        return (isset($cps[$cp]) ? $cps[$cp] : "España");
    }

    private function getAddressCoordinates($address)
    {
        $lat = 0;
        $lon = 0;

        $response = \GoogleMaps::load('geocoding')
            ->setParam(['address' => $address])
            ->get();
        $coordenadas = (json_decode($response, 1));

        if (isset($coordenadas['results'][0]['geometry']['location'])) {
            $lat = $coordenadas['results'][0]['geometry']['location']['lat'];
            $lon = $coordenadas['results'][0]['geometry']['location']['lng'];
        }

        $return = [
            "lat" => $lat,
            "lon" => $lon,
        ];

        return $return;
    }
}
