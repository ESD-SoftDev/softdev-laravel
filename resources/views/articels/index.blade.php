@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Data Artikel
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Artikel</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($articels as $articel)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $articel->judul }}</td>
                        <td>{{ $articel->artikel }}</td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection