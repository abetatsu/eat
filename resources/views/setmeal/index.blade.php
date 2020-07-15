@extends('layouts.app')

@section('content')

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
     {{ $setmeals->links() }}
</div>

@endsection