<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function project()
    {
        $projects=File::all()->toArray();
        return view('file.invoice',compact('projects'));
    }
    
    public function invoice()
    {
        return view('file.invoice');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::all()->toArray();
        return view('file.create',compact('files'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'businessname'=>'required',
            'businessemail'=>'required',
            'country'=>'required',
            'currency'=>'required',
            'finyearstart'=>'required',
            'finyearend'=>'required'
        ]);

        $file = new File([
            'name'=>$request->get('name'),
            'businessname'=>$request->get('businessname'),
            'businessemail'=>$request->get('businessemail'),
            'country'=>$request->get('country'),
            'currency'=>$request->get('currency'),
            'finyearstart'=>$request->get('finyearstart'),
            'finyearend'=>$request->get('finyearend')
        ]);
        $file->save();
        $files=File::all()->toArray();
        return view('file.create',compact('files'));
        return redirect()->route('file.create')->with('success','data added');
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
