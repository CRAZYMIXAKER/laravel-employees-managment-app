@extends('layouts.main')
@section('content')
    <div id="app">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}', user: @json($user) }</script>
        @vite(['resources/js/app.js'])
    </div>
@endsection
