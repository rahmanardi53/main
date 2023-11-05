@extends('layouts.app')

@section('title', 'List Partners')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List partners') }} <a href="{{ route('admin.partner.create') }}" class="btn btn-sm btn-primary">tambah</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Logo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                    <tr>
                        <td>{{ $partner->id }}</td>
                        <td><img src="{{ asset('partner/' . $partner->image_path) }}" alt="Partner Logo" width="100"></td>
                        <td>
                            
                            <form action="" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
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
