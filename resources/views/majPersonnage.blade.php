@extends('layouts.base')
@section('title', 'MAJ')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/maj.css') }}">
@endsection

@section('content')
    <h1 class="nom">Mettre à jour le livre : {{ $personnage->nom }} </h1>
    <div>
        <form action="/majPersonnage" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $personnage->id }}">
            <div class="form-group row">
                <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{ $personnage->nom }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="annee_de_creation" class="col-sm-4 col-form-label">Année de Création</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="annee_de_creation" placeholder="Année de Création" value="{{ $personnage->annee_de_creation }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="bd_affilie" class="col-sm-4 col-form-label">Bd affilié</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="bd_affilie" placeholder="Bd affilié" value="{{ $personnage->bd_affilie }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="dessinateur" class="col-sm-4 col-form-label">Dessinateur</label>
                <div class="col-sm-8">
                        <input type="text" class="form-control" name="dessinateur" placeholder="Déssinateur" value="{{$personnage->dessinateur }}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Mettre à jour !</button>
            </div>
        </form>
    </div>
@endsection