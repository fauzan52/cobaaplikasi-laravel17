{{--@extends('layouts.main')--}}
{{--@section('container')--}}
{{--<h1 class="mb-5">List Authors : </h1>--}}
{{--@foreach ($authors as $author)--}}
{{--<h2><a href="/authors/{{ $author->name }}">{{ $author->name }}</a></h2>--}}
{{--@endforeach--}}
{{--@endsection--}}

@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post By Author : </h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach( $posts as $author )
                <div class="col-md-4">
                    <a href="/author/{{ $author->name }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500? {{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <style type="text/css">
                                    h5{
                                        background-color: rgba(0, 0, 0, 0.5);
                                    }
                                </style>
                                <h5 class="card-title text-center flex-fill p-4 fs-3 style=">{{ $category->name }}</h5>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

