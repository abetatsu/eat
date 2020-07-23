@extends('layouts.app')

@section('content')

@if (Request::has('curry'))
<form action="/curry" method="get">
    @csrf
<button class="btn btn-primary">カレーMENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form action="/curry" method="action">
  <input type="text" name="curry" value="{{ old('curry', $keyword) }}">
  <input type="submit" value="商品検索">
</form>

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
     {{ $curries->appends(['curry' => $keyword])->links() }}
</div>

@endsection