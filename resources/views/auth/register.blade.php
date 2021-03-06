<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Daftar | Ayam-Ku</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('../assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('../assets/modules/jquery-selectric/selectric.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('../assets/img/stisla-fill.svg') }}" alt="logo" width="100">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header"><h4>Registrasi</h4></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" required>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="kecamatan">Kecamatan</label>
                                            <select name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror">
                                                <option disabled selected>Pilih Salah Satu</option>
                                                @foreach ($kecamatan as $kcm)
                                                    <option value="{{ $kcm->id }}">{{ $kcm->nama_kecamatan }}</option>
                                                @endforeach
                                            </select>
                                            @error('kecamatan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password-confirm" class="d-block">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="noHp" class="d-block">Nomor HP</label>
                                            <input id="noHp" type="text" class="form-control @error('noHp') is-invalid @enderror" name="noHp" value="{{ old('noHp') }}" required>
                                            @error('noHp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="role" class="d-block mb-3">Pilih Akun Anda</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="2" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Peternak
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="3">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Distributor
                                                </label>
                                            </div>
                                            <div>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="alamat" class="d-block">Alamat</label>
                                            <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="register" class="btn btn-info btn-lg btn-block">
                                            Simpan
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('login') }}" class="btn btn-danger btn-lg btn-block">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<!-- General JS Scripts -->
<script src="{{ asset('../assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('../assets/modules/popper.js') }}"></script>
<script src="{{ asset('../assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('../assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('../assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('../assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('../assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('../assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('../assets/js/page/auth-register.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('../assets/js/scripts.js') }}"></script>
<script src="{{ asset('../assets/js/custom.js') }}"></script>
</body>
</html>

