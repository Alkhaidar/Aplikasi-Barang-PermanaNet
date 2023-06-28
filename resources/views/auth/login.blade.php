<!doctype html>
<html lang="en">

<head>
    <title>PermanaNet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://permana.net.id/asset/images/mplogo.png" class="">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last" style="background-image: url('https://home.permana.net.id/wp-content/uploads/2022/06/Customer-Support.jpg');
          background-size: cover;">

                            <div class="text w-100">

                            </div>
                        </div>

                        <body style="background-image: url('/path/to/your/image.jpg');">

                            <div class="login-wrap p-4  p-lg-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <img src="https://permana.net.id/asset/logo/permananetlogo.png" width="120px">

                                    </div>
                                    <div class="w-100">
                                        <p class="row align-items-center justify-content-lg-between">

                                    </div>

                                </div>
                                <form action="{{ route('login-proses') }}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        @error('email')
                                        <small>{{$message}}</small>
                                        @enderror
                                        <label class="label" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    @error('password')
                                    <small>{{$message}}</small>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                                    </div>
                                    <div>

                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset( 'js/jquery.min.js') }}"></script>
    <script src="{{ asset( 'js/popper.js') }}"></script>
    <script src="{{ asset( 'js/bootstrap.min.js') }}"></script>
    <script src="{{ asset( 'js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('success'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
    @endif

    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
    @endif
</body>

</html>