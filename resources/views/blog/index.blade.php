@extends('layouts.app')

@section('title', 'List Blog')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List Blog') }} <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-primary">tambah</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <ol class="list-group list-group-numbered">
                    @foreach ($blogs as $blog)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $blog->title }}</div>
                            {{ $blog->content }}
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        @endforeach
                        
                    </ol>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
