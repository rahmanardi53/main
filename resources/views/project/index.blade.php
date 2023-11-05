@extends('layouts.app')

@section('title', 'List Projects')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List Projects') }} <a href="{{ route('admin.project.create') }}" class="btn btn-sm btn-primary">tambah</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td><img src="{{ asset('project/' . $project->image) }}" alt="{{ $project->title }}" style="max-width: 100px;"></td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->category }}</td>
                <td>{{ $project->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
