
@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-sm-7">
<div class="card">
＊1日の栄養素は深夜0時にリセットされます。
＊1週間の栄養素は毎週月曜日の深夜1時にリセットされます。
<br>
使ったお金はリセットされません。
<br>
牛丼屋に使った金額合計：{{ $user->totalPrice }}円
</div>
</div>
</div>

<div class="row my-5">
<div class="col-sm-6">
<div class="card" >
  <div class="card-header">
  １日必要な栄養素の目安(成人男性)
  <br>
  ＊あくまでも目安です
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">トータル摂取カロリー：約2500kcal</li>
    <li class="list-group-item">総摂取タンパク質：約100g</li>
    <li class="list-group-item">総摂取脂質：約80g</li>
    <li class="list-group-item">総摂取炭水化物：約350g</li>
    <li class="list-group-item">総摂取塩分：約8g</li>
  </ul>
</div>
</div>



<div class="col-sm-6">
<div class="card">
  <div class="card-header">
  {{ $user->name }}さんの本日({{ $user->updated_at->format('Y/m/d') }})の記録
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">トータル摂取カロリー：{{ $user->totalCalories }}kcal</li>
    <li class="list-group-item">総摂取タンパク質：{{ $user->totalProtein }}g</li>
    <li class="list-group-item">総摂取脂質：{{ $user->totalFat }}g</li>
    <li class="list-group-item">総摂取炭水化物：{{ $user->totalCarb }}g</li>
    <li class="list-group-item">総摂取塩分：{{ $user->totalSodium }}g</li>
  </ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="card" >
  <div class="card-header">
  １週間に必要な栄養素の目安(成人男性)
  <br>
  ＊あくまでも目安です
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">1週間トータル摂取カロリー：17500kcal</li>
    <li class="list-group-item">1週間総摂取タンパク質：700g</li>
    <li class="list-group-item">1週間総摂取脂質：560g</li>
    <li class="list-group-item">1週間総摂取炭水化物：2450g</li>
    <li class="list-group-item">1週間総摂取塩分：56g</li>
  </ul>
</div>
</div>
<div class="col-sm-6">
<div class="card" >
  <div class="card-header">
  {{ $user->name }}さんの1週間の記録
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">1週間トータル摂取カロリー：{{ $user->totalWeekCalories }}kcal</li>
    <li class="list-group-item">1週間総摂取タンパク質：{{ $user->totalWeekProtein }}g</li>
    <li class="list-group-item">1週間総摂取脂質：{{ $user->totalWeekFat }}g</li>
    <li class="list-group-item">1週間総摂取炭水化物：{{ $user->totalWeekCarb }}g</li>
    <li class="list-group-item">1週間総摂取塩分：{{ $user->totalWeekSodium }}g</li>
  </ul>
</div>
</div>
</div>

@endsection