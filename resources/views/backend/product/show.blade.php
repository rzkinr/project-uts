@extends('backend.master.app')

@section('content')
<div class="card shadow">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
        <h2 class="font-weight-bold text-primary">Product Bangsat</h2>
        @include('backend.product.action')
    </div>
    <div class="card-body">
        <div class="row ">
            <div class="col-sm-2 text-center text-dark ">
                <img src="{{ Storage::url($data->foto_sepatu)}}" alt="" width="150">
                <p>{{$data->merk_sepatu}}, {{$data->jenis_sepatu}}</p>
            </div>

            <div class="col-sm-9">
                <table class="table text-dark">
                    <tr>
                        <td>Nomor Sepatu</td>
                        <td>{{$data->no_sepatu}}</td>
                    </tr>
                    <tr>
                        <td>Stok Sepatu</td>
                        <td>{{$data->stok_sepatu}}</td>
                    </tr>
                    <tr>
                        <td>Harga Sepatu</td>
                        <td>{{$data->harga_sepatu}}</td>
                    </tr>
                    <tr>
                        <td>Status Sepatu</td>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <td>Created at</td>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <td>Updated at</td>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection