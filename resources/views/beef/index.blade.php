@extends('layouts.app')


@section('content')

<form method="GET" action="/beef">
    <input type="text" name="beef">
    <input type="submit" value="商品検索">
</form>

<div class="row">
@foreach($beefs as $beef)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/beef/{{ $beef->id }}">{{ $beef->name }}</a></h5>
        <p class="card-text">{{ $beef->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="beef_id" value="{{ $beef->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $beefs->appends(['beef' => Request::get('beef')])->onEachSide(5)->links() }}
</div>

@endsection