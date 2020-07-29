@extends('layouts.app')

@section('content')

<form action="/setmeal" method="get">
@csrf
<button class="btn btn-primary">定食一覧に戻る</button>
</form>

<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $setmeal->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額：{{ $setmeal->price }}円</li>
    <li class="list-group-item">カロリー：{{ $setmeal->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $setmeal->protein }}g</li>
    <li class="list-group-item">脂質：{{ $setmeal->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $setmeal->carb }}g</li>
    <li class="list-group-item">塩分：{{ $setmeal->sodium }}g</li>
    <li class="list-group-item">
     <form method="post" action="/user">
          @csrf
     <input type="hidden" name="setmeal_id" value="{{ $setmeal->id }}">
     <button type="submit" class="btn btn-primary">注文</button>
     </form>
     </li>
  </ul>
</div>

@endsection