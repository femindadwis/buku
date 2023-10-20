<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: hsl(0, 0%, 96%);
            padding-top: 1cm
        }
            </style>
</head>
<body>

<section class="">

    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-3 display-3 fw-bold ls-tight"> E-BOOK <br />
              <span class="text-success">BUKU ONLINE</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Ayo simpan karya karyamu bersama kami!
              Bukumu sangat berharga bagikami!
            </p>
          </div>

          <div class="col-lg-5 mb-5 mb-lg-5">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body py-5 px-md-5">
                <h2 class="text-success canter text-center mb-4"> LOGIN <br /></h2>
                <form method="POST" action="{{ url('login') }}">
                    @csrf


                  <div class="form-outline mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />

                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required autocomplete="current-password" autofocus placeholder="Password" />

                  </div>

                  <button type="submit" class="btn btn-success btn-block mb-4">
                    Sign In
                  </button>

                  {{-- <p class="text-center text-success mb-0">
                    <a href="{{ route('password.request') }}" class="text-success">Lupa password?</a>
                </p><br>
                <p class="text-center text-success mb-0">
                    <a href="{{ route('register') }}" class="text-success">Belum Punya Akun?</a>
                </p>
                  </div> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </form>
  </section>
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
