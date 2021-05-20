<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index()
    {
        // Select * from cars

//        $cars = Car::where('name', '=', 'Audio')
//            ->firstOrFail();
//        $cars = Car::chunk(2, function ($cars) {
//            foreach ($cars as $car) {
//                print_r($car);
//            }
//        });
//        print_r(Car::where('name', 'Audio')->count());

        $cars = Car::all()->toJson();
        $cars = json_decode($cars);

        return view("cars/index", [
            'cars' => $cars
        ]);
    }


    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
//        $car = new Car;
//        $car->name = $request->input('name');
//        $car->founded = $request->input('founded');
//        $car->description = $request->input('description');
//
//        $car->save();

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'founded' => $request->input('founded'),
                'description' => $request->input('description')
            ]);
        return redirect("/cars");
    }

    public function destroy($id)
    {
        $car = Car::find($id);

        $car->delete();
        return redirect("/cars");
    }
}
