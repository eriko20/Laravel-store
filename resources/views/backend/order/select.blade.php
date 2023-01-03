@extends('backend.back')

@section('admincontent')
    <div>
        <h1>Order</h1>
    </div>
    <div>
        
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Pelanggan</th>
                    <th>tanggal</th>
                    <th>total</th>
                    <th>bayar</th>
                    <th>kembali</th>
                    <th>status</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($orders as $order )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><a href="{{ url('admin/order/'.$order->idorder.'/edit') }}">{{ $order->pelanggan }}</a></td>
                        <td>{{ $order->tglorder }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->bayar }}</td>
                        <td>{{ $order->kembali }}</td>
                        @php
                            $status = "Lunas";
                            if ($order->status == 0) {
                                $status = '<a href=" '.url('admin/order/'.$order->idorder).' "> Bayar </a>';
                            }
                        @endphp
                        <td>{!! $status !!}</td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $orders->WithQueryString()->links() }}
    </div>
@endsection