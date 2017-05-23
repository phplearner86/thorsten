<?php

namespace App\Http\Controllers;

use App\Car;
use App\Photo;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = 5;
        $cars = Car::orderBy('created_at', 'desc')->paginate($per_page);

        return view('admin.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Car::create($request->all());

        flash()->success('A new car has been added');
        return redirect(route('admin.cars.index'));
    }

    /*public function storeImages(Request $request, Car $car)
    {
        $baseDir = 'images/cars';
        $file = $request->file('file');
        $name = $file->getClientOriginalName();

        $file->move($baseDir, $name);

    }*/
    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $images = $car->photos;
        $main = $car->photos->where('main', 1)->first();

        return view('admin.show', compact('car', 'main', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('admin.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //return $car;
        /*$car->update($request->all());

        flash()->sucess('Car updated');

        return redirect(route('admin.cars.index'));
*/
        $car->update($request->all());

        flash()->success('Car updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //$car->photos()->delete();
        $car->delete();


        flash()->success('Car has been removed');

        //return view('admin.create');*/
        return redirect()->route('admin.cars.index');

       
    }

    public function allImages()
    {

       $photos = Photo::paginate(10);
       //return $photos;

        return view('admin.images', compact('photos'));
    }
}
