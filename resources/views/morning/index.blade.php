@extends('layouts.app')

@section('content')

@if (Request::has('morning'))
<form action="/morning" method="get">
    @csrf
<button class="btn btn-primary">朝食MENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form action="/morning" method="get">
@csrf
     <input type="text" name="morning" value="{{ old('morning', $keyword) }}">
     <input type="submit" value="検索">
</form>

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
     {{ $mornings->appends(['morning' => $keyword])->links() }}
</div>

@endsection