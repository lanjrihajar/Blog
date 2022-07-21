
@extends('layouts.app')
@section('title','acceuil')
@section('content')

<h1> la page acceuil</h1>
<form method="post" action="{{route('traitement')}}">
    @csrf
    <div class="form-group mb-3">
        <label for="name"> Entrer votre name</label>
        <input   class="form-control" type="text" name="name" id="name">
        @error('name')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
    </div>
    <button class="btn btn-primary"> Valider</button>
</form><br><br>
<button><a href="{{route('post')}}"> page post</a></button>
@endsection
