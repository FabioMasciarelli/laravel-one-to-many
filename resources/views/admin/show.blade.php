@extends('layouts.admin')

@section('content')

<div>

    <h1>Progetto: {{ $project->title }}</h1>

    <h4>Ultima modifica: {{ $project->latest_fix }}</h4>

    <h5>Tipo: {{ $project->type_id ? $project->type->name : 'Undefined' }}</h5>

    <h6>Readme: {{ $project->readme }}</h6>

    <h6>Linguaggio: {{ $project->languages }}</h6>

</div>

@endsection