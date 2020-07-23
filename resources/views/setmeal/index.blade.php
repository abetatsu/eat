@extends('layouts.app')

@section('content')

@if (Request::has('setmeal'))
<form action="/setmeal" method="get">
    @csrf
<button class="btn btn-primary">定食MENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form action="/setmeal" method="get">
@csrf
     <input type="text" name="setmeal" value="{{ old('setmeal', $keyword) }}">
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
     {{ $setmeals->appends(['setmeal' => $keyword])->links() }}
</div>

@endsection