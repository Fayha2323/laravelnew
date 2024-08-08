@extends('layout.app')
@section('title', 'Data User')

@section('content')
    <h1>Data user</h1>
    <div align="right">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}"method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        {{-- <a href="{{ route('user.destroy', $user->id) }}"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus
                    </a> --}}

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
