@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/list.css')}}">
@endsection

@section('title', 'Personnages')

@section('content')
<h1 class="title">Liste de Personnages</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Anneé de Création</th>
                <th scope="col">Bd affilié</th>
                <th scope="col">Dessinateur</th>
                <th scope="col">Supp</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($personnages as $personnage)
            <tr>
                <td>{{ $personnage->nom }}</td>
                <td>{{ $personnage->annee_de_creation }}</td>
                <td>{{ $personnage->bd_affilie }}</td>
                <td>{{ $personnage->dessinateur }}</td>
                <td>
                    <a href="/majPersonnage/{{ $personnage->id }}" class="btn btn-success">U</a>
                </td>
                <td>
                    <form action="/suppPersonnage" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $personnage->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
