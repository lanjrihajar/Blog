@extends('layouts.app')
@section('title', 'acceuil')
@section('content')

    <h1> la page posts</h1>

    <form method="post" action="{{route('store_post')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name"> Entrer votre title</label>
            <input class="form-control" type="text" name="name" id="name">
            @error('name')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <br>
            <label for="image"> Entrer votre image</label>
            <input class="form-control" type="file" name="image" id="image"><br>
            @error('image')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <label> Entrer votre categorie</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select><br>
            @error('category_id')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <label for="content"> Entrer votre contenu</label>
            <textarea class="form-control" type="text" name="content" id="content"></textarea>

            @error('content')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <button class="btn btn-primary"> Valider</button>
    </form><br><br>
    <button><a href="{{ route('acceuil') }}"> page categories</a></button>
@endsection
