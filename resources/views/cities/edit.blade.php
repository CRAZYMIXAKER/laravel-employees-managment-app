@extends('layouts.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cities</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit City') }}
                        <a href="{{ route('cities.index') }}" class="float-right">cities</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cities.update', $city->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label
                                    for="state_id"
                                    class="col-md-4 col-form-label text-md-end">
                                    {{ __('State') }}
                                </label>

                                <div class="col-md-6">
                                    <select
                                        class="form-select"
                                        aria-label="Default select example"
                                        name="state_id"
                                        id="state_id">
                                        <option selected>Choose State</option>
                                        @foreach($states as $state)
                                            <option
                                                value="{{ $state->id }}"
                                                {{ $state->id === $city->state_id ? 'selected' : '' }}>
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label
                                    for="name"
                                    class="col-md-4 col-form-label text-md-end">
                                    {{ __('Name') }}
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="name"
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="name"
                                        value="{{ old('name', $city->name) }}"
                                        required
                                        autocomplete="name"
                                        autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="m-2 p-2">
                    <form method="POST" action="{{ route('cities.destroy', $city->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete {{ $city->name }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
