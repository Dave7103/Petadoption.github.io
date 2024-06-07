@extends('layouts.app')

@section('content')
    <h2>Contact Us</h2>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/contact" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
@endsection
