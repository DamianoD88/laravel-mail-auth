@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli prodotto</h2>
        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h3>Category : 
                    @if($post->category)
                    {{ $post->category->name }}
                    @endif                    
                </h3>
                <h5 class="card-title"> {{ $post->slug }}</h5>
                @if($post->cover)
                    <img src="{{ asset('storage/' . $post->cover)}} " alt="">
                @endif
                <p class="card-text"> {{ $post->content }}</p>
            </div>
        </div>

        <div class="mt-3">

            @forelse($post->tags as $tag)
                <span class="badge badge-warning"> {{ $tag->name }}</span>
            @empty
                <span>Non ci sono tag</span>
            @endforelse
        </div>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli prodotto</h2>
        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h3>Category : 
                    @if($post->category)
                    {{ $post->category->name }}
                    @endif                    
                </h3>
                <h5 class="card-title"> {{ $post->slug }}</h5>
                @if($post->cover)
                    <img src="{{ asset('storage/' . $post->cover)}} " alt="">
                @endif
                <p class="card-text"> {{ $post->content }}</p>
            </div>
        </div>

        <div class="mt-3">

            @forelse($post->tags as $tag)
                <span class="badge badge-warning"> {{ $tag->name }}</span>
            @empty
                <span>Non ci sono tag</span>
            @endforelse
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }} " class="btn btn-primary">Torna indietro</a>
        </div>
    </div>
@endsection
        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }} " class="btn btn-primary">Torna indietro</a>
        </div>
    </div>
@endsection