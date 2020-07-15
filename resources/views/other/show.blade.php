@extends('layouts.app')

@section('content')


<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $other->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額：{{ $other->price }}円</li>
    <li class="list-group-item">カロリー：{{ $other->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $other->protein }}g</li>
    <li class="list-group-item">脂質：{{ $other->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $other->carb }}g</li>
    <li class="list-group-item">塩分：{{ $other->sodium }}g</li>
    <li class="list-group-item">
     <form action="/other" method="get">
     @csrf
     <button class="btn btn-primary">海鮮・丼もの一覧に戻る</button>
     </form>
     </li>
  </ul>
</div>

@endsection