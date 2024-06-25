@extends('layouts.admin')

@section('content')

    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">ReadME</th>
                <th scope="col">Linguaggi</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->readme }}</td>
                    <td>{{ $project->languages }}</td>
                    <td class="d-flex gap-3">
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                            class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"
                            class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>

                        <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
