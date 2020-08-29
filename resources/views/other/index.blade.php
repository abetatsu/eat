@extends('layouts.app')

@section('content')

@if (Request::has('other'))
<form action="/other" method="get">
  @csrf
  <button class="btn btn-primary">海鮮・丼ものMENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  {{ $error }}
  @endforeach
</div>
@endif

<form action="/other" method="get">
  @csrf
  <input type="text" name="other" value="{{ old('other', $keyword) }}" placeholder="入力してください">
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
  {{ $others->appends(['other' => $keyword])->links() }}
</div>

@endsection