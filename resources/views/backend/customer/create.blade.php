@extends('backend.master.app')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h2 class="m-0 font-weight-bold text-primary">Form add customer</h2>
            @include('backend.customer.action')
        </div>
        <div class="card-body">
            <form action="{{ route('customer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname" class="text-dark">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" name="first_name" require> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname" class="text-dark">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="last_name" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress" class="text-dark">Address</label>
                    <textarea type="text" class="form-control" id="inputAddress"
                        placeholder="Malang, Indonesia" name="address" require></textarea>
                </div>
                <div class="form-group">
                    <label class="text-dark">Profil</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="profil" require>
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-dark">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email" require>
                </div>
                <div class="form-group">
                    <label class="text-dark">Username</label>
                    <input type="text" class="form-control" 
                        placeholder="Enter username" name="username" require>
                </div>
                <div class="form-group">
                    <label class="text-dark">Password</label>
                    <input type="password" class="form-control" 
                        placeholder="Enter password" name="password" require>
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
