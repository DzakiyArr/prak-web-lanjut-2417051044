@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $user->nama }}" required><br><br>

        <label for="nim">NPM:</label><br>
        <input type="number" id="nim" name="nim" value="{{ $user->nim }}" required><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection