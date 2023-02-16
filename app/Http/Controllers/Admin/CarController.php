<?php

namespace App\Http\Controllers\Admin;


use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CarUpdateRequest;
use Illuminate\Console\View\Components\Alert;
use Symfony\Contracts\Service\Attribute\Required;

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
    public function store(Request $request)
    {

            $request->validate([
                'nama_mobil' => 'required',
                'harga_sewa' => 'required',
                'bahan_bakar' => 'required',
                'jumlah_kursi' => 'required',
                'transmisi' => 'required',
                'status' => 'required',
                'deskripsi' => 'required',
                'p3k' => 'required',
                'charger' => 'required',
                'audio' => 'required',
                'ac' => 'required',
                'gambar' => 'required|max:2048',
            ]);

            Car::create($request->all());
         
           

        return redirect()->route('cars.index')->with([
            'message' => 'data berhasil dibuat ',
            'alert-type' => 'success'
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
        
    }

    public function deleteCars($id)
    {
        Car::where('id', $id)->delete();
        return redirect(route('cars.index'))->with([
            'message' => 'data berhasil dihapus',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, Car $car, $id)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required|max:2048',
            'bahan_bakar' => 'required',
            'jumlah_kursi' => 'required',
            'transmisi' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'p3k' => 'required',
            'charger' => 'required',
            'audio' => 'required',
            'ac' => 'required',
            
        ]);

        $car = Car::where('id', $id)->first();

        $car->update($request->all());

    return redirect()->route('cars.index')->with([
        'message' => 'data berhasil diedit ',
        'alert-type' => 'info'
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function updateImage(Request $request, $carId)
    // {
    //     $request->validate([
    //         'gambar' => 'required|max:2048',
    //     ]);
    //     $car = Car::findorfail($carId);
    //     if($request->gambar){
    //        unlink ("assets/images/cover/". $car->gambar );
    //        $gambar = $request->file('gambar')->store('assets/car', 'public');

    //        $car->update(['gambar' => $gambar]);
    //     }

    //     return redirect()->back()->with([
    //         'message' => 'gambar berhasil diedit',
    //         'alert-type' => 'info'
    //     ]);
    // }
}
