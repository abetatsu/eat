@extends('layouts.app')

@section('content')

<form action="/other" method="get">
     <input type="text" name="other">
     <input type="submit" value="検索">
</form>

<div class="row">
@foreach($others as $other)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/other/{{ $other->id }}">{{ $other->name }}</a></h5>
        <p class="card-text">{{ $other->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="other_id" value="{{ $other->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $others->appends(['other' => Request::get('other')])->links() }}
</div>

@endsection