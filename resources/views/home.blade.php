@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
     <div class="alert alert-success">
          {{ session('flash_message') }}
     </div>
@endif


<div class="row">
  <div class="col-sm-6">
    <div class="card homecard">
      <div class="card-body">
        <form action="/beef" method="get">
            @csrf
        <button class="btn stretched-link" onfocus="this.blur();">牛丼</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
