<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneStoreRequest;
use App\Models\Phone;
use Illuminate\Http\Request;

class phoneCotnroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('admin.phone.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhoneStoreRequest $request)
    {
       $reqestData = $request->all();

       if($request->hasFile('image')){
        try{
            $file = $request->file('image');
            $imageName = time(). '-'. $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $reqestData['image'] = $imageName;
        }catch (\Exception $e){
            return back()->withErrors(['image' => 'Rasmni yuklashda xato bor']);
        }
       }
    
       Phone::create($reqestData);

       return redirect()->route('admin.phone.index');
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
    public function edit(Phone $phone)
    {
        return view('admin.phone.update', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(PhoneStoreRequest $request, Phone $phone)
    {
        $phone->update($request->all());

        return redirect()->route('admin.phone.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        if($phone){
            $phone->delete();
        }
        return redirect()->route('admin.phone.index');
    }
}
