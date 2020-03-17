@extends('backend.master.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
        <h2 class="font-weight-bold text-primary">Products Bangsat</h2>
        @include('backend.product.action')
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <th>Merk Sepatu</th>
                    <th>Jenis Sepatu</th>
                    <th>Stok Sepatu</th>
                    <th>Status</th>
                    <th>other</th>
                </thead>
                <tbody>
                    @forelse($products as $data)
                    <tr>
                        <td>{{ $data->merk_sepatu}}</td>
                        <td>{{ $data->jenis_sepatu}}</td>
                        <td>{{ $data->stok_sepatu}}</td>
                        <td>{{ $data->status}}</td>
                        <td><a href="{{ route('products.show', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('products.edit', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-pencil-alt"></i></a>
                        <a onclick="return confirm('apakah anda yakin?')" href="{{ route('products.destroy', ['id'=>$data->id])}}" class="btn btn-default btn-flat"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Nothing</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection