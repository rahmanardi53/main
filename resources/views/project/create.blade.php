@extends('layouts.app')

@section('title', 'Tambah Postingan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah project') }} <a href="{{ route('admin.project.index') }}" class="btn btn-sm btn-danger">Kembali</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.project.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="img">Gambar Proyek</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>

                        <div class="form-group">
                            <label for="title">Judul Proyek</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>

                        <div class="form-group">
                            <label for="category">Kategori Proyek</label>
                            <input type="text" name="category" class="form-control" id="category">
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi Proyek</label>
                            <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
