@extends('Front')

@section('content')

<div class="row">
    <div class="col-6">
        <form action="{{ url('/postregister') }}" method="post">
            @csrf
            <div class="mt-2">
                <label class="form-label" for="">Pelanggan</label>
                <input class="form-control" type="text" name="pelanggan" id="">
                <span class="text-danger">
                    @error('pelanggan')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="">
                <span class="text-danger">
                    @error('alamat')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Telp</label>
                <input class="form-control" type="text" name="telp" id="">
                <span class="text-danger">
                    @error('telp')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" id="">
                    <option value="l">L</option>
                    <option value="p" selected>P</option>
                </select>
            </div>

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
                <button class="btn btn-primary" type="submit">register</button>
            </div>

        </form>
    </div>
</div>

@endsection