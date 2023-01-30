<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\carStoreRequest;
use Illuminate\Support\Str;
use App\Models\car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::latest()->get();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarStoreRequest $request)
    {
        if($request->validated()){
            $gambar = $request->file('gambar')->store('assets/car', 'public');
            $slug = Str::slug($request-> nama_mobil, '-');
            car::create($request->except('gambar') +['gambar' => $gambar, 'slug'=> $slug]);
        }
        return redirect()->route('cars.index')->with([
            'massage'=>'data sukses dibuat',
            'alert-type'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car)
    {
        return view('admin.cars.edit', compact ('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        car::where('id',$id)
        ->update([
            'menu'=> $request->menu,
            'harga'=> $request->harga,

        ]);
        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = car:: where('id', $id)->delete();
        return redirect('/');
    }
}
