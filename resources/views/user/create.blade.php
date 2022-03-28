@extends('layout.app')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Tambah Data Pegawai</h3>
                  <form action="{{route('admin.user.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
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
                    <div class="row">
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input name= "name" type="text" id="nama_lenkap" class="form-control form-control-lg" />
                          <label class="form-label" for="nama_lenkap">Nama Lengkap</label>
                        </div>

                      </div>
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input name="username" type="text" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Username</label>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline">
                            <input name= "phone_number" type="number" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Nomor Telepon</label>
                          </div>
                      </div>

                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="col-auto">
                            <select id="role" class="form-select" name="role">
                                <option selected disabled value>Role</option>
                                @foreach (config('constant.user.role') as $role)
                                    <option value="{{$role}}">{{ $role }}</option>
                                @endforeach
                            </select>
                            <label id="role" class="form-label select-label">Role</label>
                        </div>
                      </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
