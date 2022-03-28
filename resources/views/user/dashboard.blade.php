@extends('layout.app')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div>
        <a class="btn btn-primary mb-2 float-end" href="{{route('admin.user.createForm')}}">Tambah Data</a>
    </div>
    <table class="table table-hover table-striped">
    <thead class="table-primary">
        <tr >
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Role</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$user['name']}}</td>
        <td>{{$user['username']}}</td>
        <td>{{$user['password']}}</td>
        <td>{{$user['phone_number']}}</td>
        <td>{{$user['role']}}</td>
        <td>
            <a href="{{route('admin.user.delete', $user['id'])}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
