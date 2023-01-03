@extends('backend.back')

@section('admincontent')
<div class="row">
    <div class="col-6">
        <form action="{{ url('admin/kategori/'.$kategori->idkategori) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mt-2">
                <label class="form-label" for="">Kategori</label>
                <input class="form-control" type="text" value="{{ $kategori->kategori }}" name="kategori" id="">
                <span class="text-danger">
                    @error('kategori')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>

        </form>
    </div>
</div>

@endsection