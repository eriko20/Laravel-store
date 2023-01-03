@extends('Front')

@section('content')
<div class="row">
    @foreach ($menus as $Menu)
    <div class="card mx-3 mb-2" style="width: 12rem;">

        <img src="{{ asset('gambar/'.$Menu->gambar) }}" class="card-img-top" alt="...">

        <div class="card-body">
        <h5 class="card-title">{{ $Menu->menu }}</h5>
        <p class="card-text">{{ $Menu->deskripsi }}</p>
        <h5 class="card-title">{{ $Menu->harga }}</h5>
        <a href="{{ url('beli/'.$Menu->idmenu) }}" class="btn btn-primary">Beli</a>
        </div>
      </div>
    @endforeach
    <div class="d-flex justify-content-center mt-5">
        {{ $menus->links() }}
      </div>
</div>
@endsection