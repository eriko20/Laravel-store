@extends('backend.back')

@section('admincontent')
    <div>
        <h1>Order Detail</h1>
    </div>
    
        <form action="{{ url('admin/detail/create') }}" method="get">
        

        <div class="row">
        <div class="mt-2 col-4">
            <label class="form-label" for="">Tanggal mulai</label>
            <input class="form-control" type="date" name="tglmulai" id="">
        </div>
        <div class="mt-2 col-4">
            <label class="form-label" for="">Tanggal akhir</label>
            <input class="form-control" type="date" name="tglakhir" id="">
        </div>


        <div class="my-4 col-4">
            <p></p>
            <button class="btn btn-primary" type="submit">cari</button>
        </div>
    </div>
    </form>

    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>tanggal</th>
                    <th>pelanggan</th>
                    <th>menu</th>
                    <th>harga</th>
                    <th>jumlah</th>
                    <th>total</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($details as $detail )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $detail->tglorder }}</td>
                        <td>{{ $detail->pelanggan }}</td>
                        <td>{{ $detail->menu }}</td>
                        <td>{{ $detail->harga }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->total }}</td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $details->WithQueryString()->links() }}
    </div>
@endsection