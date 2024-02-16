@extends('admin.parent')

@section('content')

INI ADALAH HALAMAN ADMIN INDEX

<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>

{{-- Table User --}}
<div class="container">
    <h5 class="fw-bold">USERS</h5>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gander</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection