@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Create Articel</div>
        <div class="card-body">
            <form action="{{ route('articel.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="judul"
                           class="form-label">Judul</label>
                    <input type="text"
                           class="form-control"
                           id="judul"
                           name="judul">
                </div>
                <div class="mb-3">
                    <label for="artikel"
                           class="form-label">Artikel</label>
                    <textarea name="artikel"
                              class="form-control"
                              id="artikel"
                              rows="3"></textarea>
                </div>
                <button type="submit"
                        class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection