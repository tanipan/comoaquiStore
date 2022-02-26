<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
class CarController extends Controller
{
    public function index()
    {
        //Le decimos que nos devuelva los datos paginados
        $cars = Car::paginate(10);
        return view('admin.car.index', [
            'cars' => $cars,
        ]);
    }
    public function create()
    {
        return view('admin.car.create');
    }
    public function Store(CarRequest $request)
    {
        // Creamos los datos en la tabla con los datos recibidos de la request
        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'seats' => $request->seats,
            'doors' => $request->doors,
            'gearBoxType' => $request->gearBoxType,
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.car.list');
    }

    public function edit(Car $car)
    {
        return view('admin.car.edit', compact('car'));
    }

    public function update(CarRequest $request, Car $car)
    {
        //Modificamos los datos de las tablas, con lo datos recibidos de la request
        $car->brand = request('brand');
        $car->model = request('model');
        $car->seats = request('seats');
        $car->doors = request('doors');
        $car->gearBoxType = request('gearBoxType');
        $car->color = request('color');
        $car->price = request('price');

        $car->save();

        return redirect()->route('admin.car.list');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        // dd($car);
        //Borramos el registro de la tabla, con el dato recibido
        $car->delete();
        return redirect()->route('admin.car.list');
    }
}
