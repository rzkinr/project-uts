@extends('backend.master.app')

@section('content')
<div class="card shadow">
<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
<h2 class="text-primary">Recently</h2>
<button class="btn btn-primary btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    +
  </button>
</div>
<div class="collapse" id="collapseExample">
  <div class="card-body">
    ComingSoon
  </div>
</div>
</div>
@endsection
