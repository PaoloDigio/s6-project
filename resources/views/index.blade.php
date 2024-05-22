@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>
    <div class="list-group">
        @forelse ($projects as $project)
            <a href="{{ route('projects.show', $project) }}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $project->name }}</h5>
                <p class="mb-1">{{ $project->description }}</p>
            </a>
        @empty
            <p>No projects found.</p>
        @endforelse
    </div>
</div>
@endsection
