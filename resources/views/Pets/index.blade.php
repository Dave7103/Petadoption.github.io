@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Available Pets</h2>
        <div class="pet-list">
            @foreach ($pets as $pet)
                <div class="pet">
                    <a href="{{ route('pets.show', $pet->id) }}">
                        <img src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}">
                        <h3>{{ $pet->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection