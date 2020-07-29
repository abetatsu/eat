@extends('layouts.app')

@section('content')
<form action="/beef" method="get">
  @csrf
<button class="btn btn-primary">牛丼一覧に戻る</button>
</form>

<div class="card" style="width: 18rem;">
  <div class="card-header">
  {{ $beef->name }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">金額：{{ $beef->price }}円</li>
    <li class="list-group-item">カロリー：{{ $beef->calories }}kcal</li>
    <li class="list-group-item">タンパク質：{{ $beef->protein }}g</li>
    <li class="list-group-item">脂質：{{ $beef->fat }}g</li>
    <li class="list-group-item">炭水化物：{{ $beef->carb }}g</li>
    <li class="list-group-item">塩分：{{ $beef->sodium }}g</li>
    <li class="list-group-item">
     <form method="post" action="/user">
          @csrf
      <input type="hidden" name="beef_id" value="{{ $beef->id }}">
      <button type="submit" class="btn btn-primary">注文</button>
      </form>
     </li>
  </ul>
</div>

@endsection