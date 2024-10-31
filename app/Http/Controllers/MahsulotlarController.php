<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahsulotStoreRequest;
use App\Models\Mahsulot;
use Illuminate\Http\Request;

class MahsulotlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahsulotlar = Mahsulot::all();
        return view('admin.mahsulotlar.index', compact('mahsulotlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahsulotlar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahsulotStoreRequest $request)
    {
        $requestData = $request->all();

        if($request->hasFile('image')){
            try{
                $file = $request->file('image');
                $imageName = time(). '-'. $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $requestData['image'] = $imageName;
            }catch (\Exception $e){
                return back()->withErrors(['image' => 'Rasmni yuklashda xatolik bor']);
            }

        }
        Mahsulot::create($requestData);

        return redirect()->route('admin.mahsulotlar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mah = Mahsulot::findOrFail($id);

        return view('admin.mahsulotlar.show', compact('mah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahsulot = Mahsulot::findOrFail($id);
        if($mahsulot){
            $mahsulot->delete();
        }

        return redirect()->route('admin.mahsulotlar.index');
    }
}
