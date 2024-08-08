@extends('layout.app')
@section('title', 'Tambah Kategori')
@section('content')

    <h1>Tambah Kategori</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input class="form-control" type="text" name="category_name">

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
    </form>
@endsection
