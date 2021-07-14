<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <div>
                <main>
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card rounded-lg mt-5">
                                <div class="card-header">
                                <h3 class="text-center">Register</h3>
                            </div>
                                    <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        @if(session('errors'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Something it's wrong:
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for=""><strong>Nama Lengkap</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><strong>Email</strong></label>
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><strong>Konfirmasi Password</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        <br>
                                        <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
