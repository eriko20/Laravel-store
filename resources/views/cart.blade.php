@extends('Front')

@section('content')
    
@if (session('cart'))

    <div>
            <div>
                <a class="btn btn-danger" href="{{ url('batal') }}">Batal</a>
            </div>
        @php
            $no=1;
            $total = 0;
        @endphp
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody> 
                @foreach (session ('cart') as $idmenu=>$Menu)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $Menu['menu'] }}</td>
                        <td>{{ $Menu['harga'] }}</td>
                        <td>
                            <span><a href="{{ url('kurang/'. $Menu['idmenu']) }}">[-]</a></span>
                            {{ $Menu['jumlah'] }}
                            <span><a href="{{ url('tambah/'. $Menu['idmenu']) }}">[+]</a></span>
                        </td>
                        <td>{{ $Menu['jumlah'] * $Menu['harga'] }}</td>
                        <td> <a href="{{ url('Hapus/'. $Menu['idmenu']) }}"> Hapus </a> </td>
                    </tr>
                @php
                    
                    $total = $total + ($Menu['jumlah'] * $Menu['harga']);
                @endphp
                @endforeach
                
                <tr>
                    <td colspan="4">Total Pembayaran</td>
                    <td>{{ $total }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <a class="btn btn-success" href="{{ url('checkout') }}">Checkout</a>
        </div>
    </div>
@else
    <script>
        window.location.href="/";
    </script>
@endif
@endsection