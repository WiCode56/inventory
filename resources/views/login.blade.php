<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InventoryOriStore | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<style>
    .login-box {
        width: 500px;
        padding: 55px;
        box-sizing: border-box;
        background-image: url('../img/Paper.jpg');
    }

    body {
        background-image: url('../img/Warehouse.jpg')
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Warna hitam dengan transparansi 50% */
        z-index: -1;
        /* Agar tidak menutupi konten */
    }
</style>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (Session::has('logingagal'))
        <script>
            Swal.fire({
            icon: "error",
            title: "Gagal",
            text: "Email dan Password Salah!"
          });
        </script>
        @elseif (session('successregis'))
        <script>
            Swal.fire({
            title: "",
            text: "Anda Berhasil Registrasi!",
            icon: "success"
            });
        </script>
        @elseif (session('logout'))
        <script>
            Swal.fire({
            title: "",
            text: "Anda Berhasil LogOut!",
            icon: "success"
            });
        </script>
        @endif
        <div class="card col-lg-3">
            <div class="card-body p-4">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-5 mt-3">
                        <h3 class="text-start">Login</h3>
                        <span class="text-start">InventoryOriStore</span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" autocomplete="off" placeholder="Masukan Email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" placeholder="Masukan Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary form-control mb-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
