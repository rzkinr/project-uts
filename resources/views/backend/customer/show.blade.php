@extends('backend.master.app')

@section('content')
<div class="card shadow">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
        <h2 class="font-weight-bold text-primary">Customer Bangsat</h2>
        @include('backend.customer.action')
    </div>
    <div class="card-body">
        <div class="row ">
            <div class="col-sm-2 text-center text-dark ">
                <img src="{{ Storage::url($data->profil)}}" alt="" width="150">
                <p>{{$data->first_name}} {{$data->last_name}}</p>
            </div>

            <div class="col-sm-9">
                <table class="table text-dark">
                    <tr>
                        <td>Username</td>
                        <td>{{$data->username}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$data->address}}</td>
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
