@extends('layout.app')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Pengaduan Masyarakat Kota Bogor</h3>
                  <form action="{{route('complaint.create')}}" method="post" enctype="multipart/form-data">
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
                          <input name= "nik" type="number" id="nama_lenkap" class="form-control form-control-lg" />
                          <label class="form-label" for="nama_lenkap">NIK</label>
                        </div>

                      </div>
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input name="name" type="text" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Nama Lengkap</label>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline">
                            <input name= "address" type="text" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Alamat Lengkap</label>
                          </div>
                      </div>

                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline">
                            <input name= "phone_number" type="text" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Nomor Telepon</label>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                          <div class="form-outline">
                              <input name= "report" type="text" id="emailAddress" class="form-control form-control-lg" />
                              <label class="form-label" for="emailAddress">Isi Pengaduan</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 d-flex align-items-center">
                          <div class="form-outline">
                              <input name= "status" type="text" id="emailAddress" class="form-control form-control-lg" value="BELUM SELESAI" hidden />
                            </div>
                        </div>
                      </div>

                    <div class="row">
                        <div class="mb-3">
                            <label class="block" for="photo">Unggah Foto</label>
                            <div class="mb-2">
                                <img id="photo-img" class="mx-auto" src="" alt="" srcset="" style="width:10rem;height:10rem">
                            </div>
                            <input onchange="document.getElementById('photo-img').src = window.URL.createObjectURL(this.files[0])"
                            accept=".jpg, .jpeg, .png" class="block" id="photo" type="file" name="photo">
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
