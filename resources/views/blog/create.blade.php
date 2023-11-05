@extends('layouts.app')

@section('title', 'Tambah Postingan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Postingan') }} <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-danger">Kembali</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Postingan</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Postingan</label>
                            <textarea class="form-control" name="content" id="content" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <input type="text" class="form-control" name="category" id="category" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="img">Gambar</label>
                            <input type="file" class="form-control-file" name="img" id="img" required><br><br>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
