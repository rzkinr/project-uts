@extends('backend.master.app')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h2 class="m-0 font-weight-bold text-primary">Form add product</h2>
            @include('backend.product.action')
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="merk sepatu" class="text-dark">Merk Sepatu</label>
                    <input type="text" class="form-control" placeholder="Masukkan Merk Sepatu" name="merk_sepatu">
                </div>
                <div class="form-group">
                    <label class="text-dark">Foto Sepatu</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="foto_sepatu"  require>
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis sepatu" class="text-dark">Jenis Sepatu</label>
                    <input type="text" class="form-control" placeholder="Masukkan Jenis Sepatu" name="jenis_sepatu" require>
                </div>
                <div class="form-group">
                    <label for="harga sepatu" class="text-dark">Harga Sepatu</label>
                    <input type="text" class="form-control" placeholder="Masukkan Harga Sepatu" name="harga_sepatu" require>
                </div>
                <div class="form-group">
                    <label class="text-dark">Nomor Sepatu</label>
                    <input type="number" class="form-control" placeholder="Masukkan No. Sepatu" name="no_sepatu"  require>
                </div>
                <div class="form-group">
                    <label class="text-dark">Stok Sepatu</label>
                    <input type="number" class="form-control" 
                        placeholder="Masukkan Stok Sepatu" name="stok_sepatu" require>
                </div>
                <div class="form-group">
                    <label class="text-dark">Status Sepatu</label>
                    <input type="text" class="form-control" placeholder="Masukkan Status Sepatu" name="status" require>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary float-right">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
