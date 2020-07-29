@extends('layouts.app')

@section('content')

<form action="/morning" method="get">
@csrf
<button class="btn btn-primary">朝食一覧に戻る</button>
</form>

<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $morning->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額：{{ $morning->price }}円</li>
    <li class="list-group-item">カロリー：{{ $morning->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $morning->protein }}g</li>
    <li class="list-group-item">脂質：{{ $morning->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $morning->carb }}g</li>
    <li class="list-group-item">塩分：{{ $morning->sodium }}g</li>
    <li class="list-group-item">
     <form method="post" action="/user">
          @csrf
     <input type="hidden" name="morning_id" value="{{ $morning->id }}">
     <button type="submit" class="btn btn-primary">注文</button>
     </form>
     </li>
  </ul>
</div>

@endsection