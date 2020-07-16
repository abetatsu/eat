@extends('layouts.app')

@section('content')

<form action="/setmeal" method="get">
     <input type="text" name="setmeal">
     <input type="submit" value="検索">
</form>

<div class="row">
@foreach($setmeals as $setmeal)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/setmeal/{{ $setmeal->id }}">{{ $setmeal->name }}</a></h5>
        <p class="card-text">{{ $setmeal->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="setmeal_id" value="{{ $setmeal->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $setmeals->appends(['setmeal' => Request::get('setmeal')])->links() }}
</div>

@endsection