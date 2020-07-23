@extends('layouts.app')


@section('content')

@if (Request::has('beef'))
<form action="/beef" method="get">
    @csrf
<button class="btn btn-primary">牛丼MENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form method="GET" action="/beef">
    <input type="text" name="beef" value="{{ old('beef', $keyword) }}">
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
     {{ $beefs->appends(['beef' => $keyword])->onEachSide(5)->links() }}
</div>

@endsection