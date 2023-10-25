@extends('layouts.app')

@section('content')

<div class="container mt-5 text-center">

    <a href="{{ route('admin.projects.index')}}" class="btn btn-dark">Torna alla Lista</a>

        <div class="my-5">

        <h1>Stai modificando il progetto: {{$project->title}}</h1>

<form action="{{ route('admin.projects.update' , $project)}}" method="POST">
    @csrf
    @method('PUT')

<div class="row justify-content-center my-5">

    <div class="col-6">
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" class="form-control" value=" {{ $project->title}}">
    </div>

</div>

<div class="row justify-content-center my-5">

    <div class="col-4">
        <label for="date">Data</label>
        <input type="text" id="date" name="date" class="form-control" value=" {{ $project->date}}">
       
    </div>
    <div class="col-4">
        <label for="main_lang">Linguaggio</label>
        <select class="form-select" id="main_lang" name="main_lang">
            
            <option value="html" @if($project->main_lang == 'html') selected @endif >Html</option>
            <option value="js" @if($project->main_lang == 'js') selected @endif >Js</option>
            <option value="vite" @if($project->main_lang == 'vite') selected @endif >Vite</option>
            <option value="php" @if($project->main_lang == 'php') selected @endif >Php</option>
          </select>
       
    </div>
</div>
<div class="row justify-content-center my-5">
    <div class="col-2">
        <label for="commit">Numero di commit</label>
        <input type="text" id="commit" name="commit" class="form-control"value=" {{ $project->commit}}" >
    </div>
    <div class="col-2">
        <label for="bonus">Bonus</label>
        <input type="text" id="bonus" name="bonus" class="form-control" value=" {{ $project->bonus}}">
    </div>
</div>

<button class="btn btn-dark">Salva</button>

</form>



@endsection