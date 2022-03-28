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
    <table class="table table-hover table-striped">
    <thead class="table-primary">
        <tr >
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Isi Laporan Pengaduan</th>
        <th scope="col">Foto</th>
        <th scope="col">Waktu Pengaduan</th>
        <th scope="col">Status Pengaduan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($complaints as $complaint)
        <tr>
        <th scope="row">{{$complaint['id']}}</th>
        <td>{{$complaint['nik']}}</td>
        <td>{{$complaint['name']}}</td>
        <td>{{$complaint['address']}}</td>
        <td>{{$complaint['phone_number']}}</td>
        <td>{{$complaint['report']}}</td>
        <td><img src="{{ asset('storage/'.$complaint['photo'])}}" alt="" srcset="" style="width:5rem;height:5rem"></td>
        <td>{{$complaint['status']}}</td>
        <td>{{$complaint['created_at']}}</td>
        <td>
            <a href="{{route('complaint.delete', $complaint['id'])}}" class="btn btn-danger">Delete</a>
            <a href="{{route('complaint.edit', $complaint['id'])}}" class="btn btn-warning">Edit</a>
            <a target="_blank" href="{{route('complaint.print', $complaint['id'])}}" class="btn btn-success">Print</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
