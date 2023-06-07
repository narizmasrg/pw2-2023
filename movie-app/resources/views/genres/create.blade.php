@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genres Data
        </div>
        <div class="card-body">
            <form method="POST" action="/genres">
                @csrf
                <div>
                    <label for="Genre">Title:</label>
                    <input type="text" id="judul" name="judul">
                </div>
                <div>
                    <label for="Deskripsi">Description:</label>
                    <input type="text" id="poster" name="poster">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection