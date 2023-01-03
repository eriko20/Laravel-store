<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Login Admin Aplikasi Resto</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-4">
                <h1 class="text-center">
                    Login admin
                </h1>
                <form action="{{ url('admin/postlogin') }}" method="post">
                    @csrf
                    @if (Session::has('pesan'))
                        <div class="alert alert-danger">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif
                    <div class="mt-2">
                        <label class="form-label" for="">Email</label>
                        <input class="form-control" type="email" name="email" id="">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
        
                    <div class="mt-2">
                        <label class="form-label" for="">password</label>
                        <input class="form-control" type="password" name="password" id="">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
        
                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit">login</button>
                    </div>
        
                </form>
            </div>
        </div>

    </div>
    
    
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>