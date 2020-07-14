@extends('layouts.app')

@section('content')

<div class="row">
@foreach($curries as $curry)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/curry/{{ $curry->id }}">{{ $curry->name }}</a></h5>
        <p class="card-text">{{ $curry->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="curry_id" value="{{ $curry->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $curries->links() }}
</div>

@endsection