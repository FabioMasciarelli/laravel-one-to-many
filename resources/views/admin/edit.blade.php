@extends('layouts.admin')


@section('content')
    <h1>Modifica progetto</h1>

    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>
        <div class="mb-3">
            <label for="readme" class="form-label">ReadME</label>
            <textarea class="form-control" id="readme" rows="3" name="readme">{{ $project->readme }}</textarea>
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggio</label>
            <select class="form-select" aria-label="Default select example" id="languages" name="languages">
                <option>Seleziona</option>
                <option @selected($project->languages === 'Javascript') value="Javascript">Javascript</option>
                <option @selected($project->languages === 'PHP') value="PHP">PHP</option>
                <option @selected($project->languages === 'CSS') value="CSS">CSS</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="latest_fix" class="form-label">Ultima Modifica</label>
            <input type="text" class="form-control" id="latest_fix" name="latest_fix" value="{{ $project->latest_fix }}">
        </div>
        <button type="submit" class="btn btn-success">Modifica</button>
    </form> 
@endsection