@extends('layouts.app')

@section('title', 'Tambah Postingan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Partner') }} <a href="{{ route('admin.partner.index') }}" class="btn btn-sm btn-danger">Kembali</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="img">Logo Partner</label>
                    <input type="file" name="img" class="form-control" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
