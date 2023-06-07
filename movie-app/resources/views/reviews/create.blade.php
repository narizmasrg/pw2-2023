@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            Movies Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div>
                    <label for="film">Film:</label>
                    <input type="text" id="Film" name="judul">
                </div>
                <div>
                    <label for="user">User:</label>
                    <input type="text" id="poster" name="poster">
                </div>
                <div>
                    <label for="rating">rating:</label>
                    <select id="genre" name="genre_id">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="review">Review:</label>
                    <input type="text" id="negara" name="negara">
                </div>
                <div>
                    <label for="tahun">Year:</label>
                    <input type="text" id="tahun" name="tahun">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection