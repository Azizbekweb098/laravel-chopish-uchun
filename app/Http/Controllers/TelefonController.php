<?php

namespace App\Http\Controllers;

use App\Http\Requests\TellStoreRequest;
use App\Models\Tell;
use Illuminate\Http\Request;

class TelefonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tells = Tell::all();

        return view('admin.tell.index', compact('tells'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tell.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TellStoreRequest $request)
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
        Tell::create($requestData);

        return redirect()->route('admin.tell.index');
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
        //
    }
}
