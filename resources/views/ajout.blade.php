@extends('layouts.base')
@section('title', 'Ajout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/ajout.css') }}">
@endsection

@section('content')
    <h1 class="title">Ajouter un Personnage</h1>
    <div>
        <form action="/ajout" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="annee_de_creation" class="col-sm-4 col-form-label">Année de Création</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="annee_de_creation" placeholder="Année de Création">
                </div>
            </div>
            <div class="form-group row">
                <label for="bd affilie" class="col-sm-4 col-form-label">Bd affilié</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="bd affilie" placeholder="Bd affilié">
                </div>
            </div>
            <div class="form-group row">
                <label for="dessinateur" class="col-sm-4 col-form-label">Déssinateur</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="dessinateur" placeholder="Dessinateur">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection