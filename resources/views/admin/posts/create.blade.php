@extends('layouts.app')

@section('content')
    <div class="container">
        
    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control 
            @error('title') 
            is-invalid 
            @enderror" 
            id="titolo" name="title" value="{{ old('title')}} " >
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select name="category_id" id="category" class="form-control">
                <option value="">-- Seleziona una categoria --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if($category->id == old('category_id'))
                        selected
                        @endif
                        >{{ $category->name }} </option>
                @endforeach
                
            </select>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Immagine</label>
            <input id="img" type="file" name="image" class="form-control-file 
            @error('image') 
            is-invalid 
            @enderror">
            @error('image')
                 <div class="alert alert-danger">{{ $message }}</div>
            @enderror 

        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Descrizione</label>
            <textarea class="form-control 
            @error('content')
                is-invalid
            @enderror" 
            name="content" id="desc" cols="30" rows="10">{{ old('content')}}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror         
        </div>

        <div class="mb-3">
            <h4>Tag</h4>
            @foreach($tags as $tag)
            <span class="d-inline-block">
                <input id="tag{{ $loop->iteration }}" 
                type="checkbox" value="{{ $tag->id }}"                
                @if(in_array($tag->id, old('tags', [])))
                checked
                @endif
                name="tags[]">
                <label for="tag{{ $loop->iteration }}" class="form-label">{{ $tag->name }}</label>
            </span>
                
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection