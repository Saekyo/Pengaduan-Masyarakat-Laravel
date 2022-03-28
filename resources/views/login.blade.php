@extends('layout.app')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
                  <form action="{{route('auth')}}" method="post">
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
                      <div class="mb-3">

                        <div class="form-outline">
                          <input name= "username" type="text" id="nama_lenkap" class="form-control form-control-lg" />
                          <label class="form-label" for="nama_lenkap">Username</label>
                        </div>

                      </div>
                      <div class="mb-3">

                        <div class="form-outline">
                          <input name="password" type="password" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Password</label>
                        </div>

                      </div>
                    </div>
                    <div class="mt-4 pt-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
