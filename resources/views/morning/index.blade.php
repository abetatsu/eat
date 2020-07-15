@extends('layouts.app')

@section('content')

<div class="row">
@foreach($mornings as $morning)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/morning/{{ $morning->id }}">{{ $morning->name }}</a></h5>
        <p class="card-text">{{ $morning->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="morning_id" value="{{ $morning->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $mornings->links() }}
</div>

@endsection