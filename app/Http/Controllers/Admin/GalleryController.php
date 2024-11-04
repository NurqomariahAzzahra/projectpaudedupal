<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\GalleryDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Gallery;
use App\Models\KategoriArtikel;
use Str;
use File;

class GalleryController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService = $summernoteService;
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::with(['user','kategoriArtikel'])->get();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriArtikel = KategoriArtikel::all();
        return view('admin.gallery.create',compact('kategoriArtikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gallery::create([
            'nama_gallery' => $request->nama_gallery,
            'deskripsi_gallery' => $this->summernoteService->imageUpload('gallery'),
            'thumbnail' => $this->uploadService->imageUpload('gallery'),
            'slug' => Str::slug($request->nama_gallery),
            'user_id' => auth()->user()->id,
            'kategori_artikel_id' => $request->kategori_artikel_id,
        ]);

        return redirect()->route('admin.gallery.index')->with('success','Data berhasil ditambah');
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
    public function edit(Gallery $gallery)
    {   
        $kategoriArtikel = KategoriArtikel::get();
        return view('admin.gallery.edit',compact('gallery','kategoriArtikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->authorize('update',$gallery);

        Gallery::create([
            'nama_gallery' => $request->nama_gallery,
            'deskripsi' => $this->summernoteService->imageUpload('gallery'),
            'thumbnail' => $this->uploadService->imageUpload('gallery'),
            'slug' => Str::slug($request->nama_gallery),
            'user_id' => auth()->user()->id,
            'kategori_artikel_id' => $request->kategori_artikel_id,
        ]);
           
        return redirect()->route('admin.gallery.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {   
        $this->authorize('delete',$gallery);

        event(new GalleryDeleteEvent($gallery));
        
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success','Data berhasil dihapus');
    }
}
