<?php

namespace App\Http\Controllers;

use App\Models\Huber;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\HuberUploadRequest;

class HomeController extends Controller
{
    /////////
    //Páginas
    /////////

    public function index(Request $request)
    {
        return view('front/index');
    }

    public function accesibilidad(Request $request)
    {
        return view('front/accesibilidad');
    }

    public function agenciaTransporte(Request $request)
    {
        return view('front/agenciatransporte');
    }

    public function avisoLegal(Request $request)
    {
        return view('front/avisolegal');
    }

    public function comercioOnline(Request $request)
    {
        return view('front/comercioonline');
    }

    public function privacidad(Request $request)
    {
        return view('front/privacidad');
    }

    public function hazteHubber(Request $request)
    {
        return view('front/haztehubber');
    }

    public function ofertasTrabajo(Request $request)
    {
        return view('front/ofertastrabajo');
    }

    public function cookies(Request $request)
    {
        return view('front/cookies');
    }


    ////////////
    //Auxiliares
    ////////////

    public function formulario()
    {
        return view('front/index');
    }

    public function stepTwo($token)
    {

        $huber = Huber::where('token', $token)->first();

        if ($huber == null) {
            return Redirect::to('https://dingdonehubs.com');
        }

        return view('front/step2', compact('huber'));
    }

    public function uploadDocu(Request $request, $token)
    {
        $result = "";
        $huber = Huber::where('token', $token)->first();
        $files = [];
        foreach ($request->file() as $name => $file) {
            $fileName = $name . '_' . $token . "_" . date("YmdHis") . "." . $file->extension();
            $file->storeAs('uploads/' . $token, $fileName, 'public');

            $files[] = $name;

            //Seteamos el nombre del fichero, que coincide con la propiedad del modelo
            //de esta forma podemos acceder a la pripiedad de forma dinámica
            $document = $name;
            $huber->$document = $fileName;

            $result = "ok";
        }

        //Mail
        dispatch(new SendEmailJob("info@dingdonehubs.com", $huber, 5, $files));

        $huber->option = request('optionselected');
        $huber->save();

        return redirect()->route('step.two', compact('token'))->with('result', $result);
    }
}
