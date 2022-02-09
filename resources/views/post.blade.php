@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h3>
                    <h1>{{ $post->title }}</h1>
                    <h15 class="card-text"><small class="text-muted">• {{ $post->created_at->diffForHumans() }}</small></h15>
                </h3>
{{--                <h10>By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a></h10>--}}
                <br>
                <h10>Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h10>
                <br>
                <br>
                @if($post->image)
                    <div style="max-height: 400px; overflow: hidden ;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts"> Back </a>
            </div>
        </div>
    </div>



@endsection
