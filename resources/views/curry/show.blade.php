@extends('layouts.app')

@section('content')


<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $curry->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額{{ $curry->price }}円</li>
    <li class="list-group-item">カロリー：{{ $curry->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $curry->protein }}g</li>
    <li class="list-group-item">脂質：{{ $curry->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $curry->carb }}g</li>
    <li class="list-group-item">塩分：{{ $curry->sodium }}g</li>
    <li class="list-group-item">
     <form action="/curry" method="get">
     @csrf
     <button class="btn btn-primary">牛丼一覧に戻る</button>
     </form>
     </li>
  </ul>
</div>

@endsection