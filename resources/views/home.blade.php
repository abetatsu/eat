@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
     <div class="alert alert-success">
          {{ session('flash_message') }}
     </div>
@endif

<form action="/beef" method="get">
@csrf
<button class="btn btn-primary">牛丼</button>
</form>


@endsection
