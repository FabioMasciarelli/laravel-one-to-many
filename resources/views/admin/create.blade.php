@extends('layouts.admin')

@section('content')
    <h1>Crea un nuovo progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="readme" class="form-label">ReadME</label>
            <textarea class="form-control" id="readme" rows="3" name="readme"></textarea>
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggio</label>
            <select class="form-select" aria-label="Default select example" id="languages" name="languages">
                <option selected>Seleziona</option>
                <option value="Javascript">Javascript</option>
                <option value="PHP">PHP</option>
                <option value="CSS">CSS</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="latest_fix" class="form-label">Ultima Modifica</label>
            <input type="text" class="form-control" id="latest_fix" name="latest_fix">
        </div>
        <button type="submit" class="btn btn-success">Crea</button>
    </form>
@endsection
