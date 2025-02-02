@extends('layouts.backend.app',[
    'title' => 'Manage Artikel',
    'contentTitle' => 'Manage Artikel',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Author</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($artikel as $art)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $art->judul }}</td>
                  <td>{{ $art->user->name }}</td>
                  <td>{{ $art->kategoriArtikel->nama_kategori }}</td>
                  
                  <td>
                    @if(auth()->user()->id == $art->user_id)
                    <div class="row ml-2">
                        <a href="{{ route('admin.artikel.edit',$art->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                        
                        <form method="POST" action="{{ route('admin.artikel.destroy',$art->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                    @else
                    <a href="javasript:void(0)" class="btn btn-danger btn-sm">
                    <i class="fas fa-ban"></i> No Action Available
                    </a>
                    @endif
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
@endpush



<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Artikel</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.artikel.create') }}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input required="" type="" name="judul" placeholder="" class="form-control"> 
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select required="" class="form-control" name="kategori_artikel_id">
                        <option selected="" disabled="">- PILIH KATEGORI -</option>
                        @foreach($kategoriArtikel as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div id="form-group">
                <label for="deskripsi">Isi Artikel</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>