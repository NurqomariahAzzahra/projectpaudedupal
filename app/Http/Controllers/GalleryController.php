<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // return view('gallery.index');
        $data_gallery = \App\Models\Gallery::all();
    	return view('gallery.index',['data_gallery' => $data_gallery]);
    }

    public function create()
    {
        // \App\Models\Gallery::create($request ->all());
    	// return $request ->all();
        return view('gallery.create');


    }

    // public function show(Gallery $data_gallery)
    // {
    // 	return view('gallery.show',compact('gallery'));
    // }

    public function store(Request $request)
    {
        $message=[
            'required' => 'kolom: atribut harus lengkap'
        ];

        $validasi=$request->validate([
            'nama_gallery'=>'required'|'unique:gallery|max:255',
        ]);
        $validasi['user_id']=Auth::id();
        Gallery::create($validasi);
        return redirect('gallery')->with('succes', 'Data Berhasil disimpan');
        // \App\Models\Gallery::create($request ->all());
    	// return $request ->all();
        // // return view('gallery.create');

    }

}
