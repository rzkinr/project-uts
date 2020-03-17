@extends('backend.master.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
        <h2 class="font-weight-bold text-primary">Orders Bangsat</h2>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <th>Kode Order</th>
                    <th>Pembeli</th>
                    <th>Product</th>
                    <th>Jumlah Pembelian</th>
                    <th>Total Pembelian</th>
                    <th>Status Pembayaran</th>
                </thead>
                <tbody>
                    @forelse($orders as $data)
                    <tr>
                        <td>{{ $data->first_name}} {{$data->last_name}}</td>
                        <td>{{ $data->address}}</td>
                        <td>{{ $data->email}}</td>
                        <td>{{ $data->username}}</td>
                        <td><a href="{{ route('customer.show', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('customer.edit', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-pencil-alt"></i></a>
                        <a onclick="return confirm('apakah anda yakin?')" href="{{ route('customer.destroy', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Nothing</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection
