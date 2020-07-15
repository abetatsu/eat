@extends('layouts.app')

@section('content')


<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $sidemenu->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額：{{ $sidemenu->price }}円</li>
    <li class="list-group-item">カロリー：{{ $sidemenu->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $sidemenu->protein }}g</li>
    <li class="list-group-item">脂質：{{ $sidemenu->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $sidemenu->carb }}g</li>
    <li class="list-group-item">塩分：{{ $sidemenu->sodium }}g</li>
    <li class="list-group-item">
     <form action="/sidemenu" method="get">
     @csrf
     <button class="btn btn-primary">サイドメニュー 一覧に戻る</button>
     </form>
     </li>
  </ul>
</div>

@endsection