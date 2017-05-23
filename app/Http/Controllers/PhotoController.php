<?php

namespace App\Http\Controllers;

use App\Car;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    protected $baseDir = 'images/cars';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Car $car)
    {
        $file = $request->file('file');
        $filename = time(). '-' .$file->getClientOriginalName(); 

        $file->move($this->baseDir, $filename);

        $car->addPhoto($filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car, Photo $photo)
    {
        if ($request->main == true) 
        {
           if ($old_main =  $car->photos->where('main', 1)->first()) 
           {
                $old_main->main = false;
                $old_main->save();

           }
            $photo->main = true;
            $photo->save();
        }

        /*if ($request->photo != null) 
        {
            $file_path = $photo->path;
        unlink($file_path);

        $photo->delete();

        $file = $request->file('photo');
        $filename = time(). '-' .$file->getClientOriginalName(); 

        $file->move($this->baseDir, $filename);

        $car->addPhoto($filename); 
         } */

        return back();      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car, Photo $photo)
    {
        
        $file_path = $photo->path;
        unlink($file_path);

        $photo->delete();
        
        return back();
    }

    public function destroyImage(Photo $photo)
    {
        $file_path = $photo->path;
        unlink($file_path);

        $photo->delete();
        
        return back();
    }

}
