
@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
     <div class="alert alert-success">
          {{ session('flash_message') }}
     </div>
@endif

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      ＊1日の栄養素は深夜0時にリセットされます。
      ＊1週間の栄養素は毎週月曜日の深夜1時にリセットされます。
      <br>
      使ったお金はリセットされません。
      <br>
      牛丼屋に使った金額合計：{{ $user->totalPrice }}円
    </div>
  </div>


  <div class="accordion col-sm-6" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{ $user->name }}さんの注文履歴(過去4食分)
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="list-group list-group-flush">
            @foreach($orders as $order)
            <li class="list-group-item">
                {{ $order->order_name }}　¥{{ $order->order_price }}　{{ $order->created_at->format('Y年n月j日　G時i分') }}
            </li>
            @endforeach
          </ul>
          <form method="get" action="/order">
          @csrf
            <button class="btn btn-primary">さらに履歴をみる</button>
          </form>
        </div>
      </div>
    </div>
  </div>




  
</div>
<div class="row my-5">

<div class="col-sm-6">
<div class="card" >
  @if($user->gender === 'male')
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
  @endif

  @if($user->gender === 'female')
  <div class="card-header">
  １日必要な栄養素の目安(成人女性)
  <br>
  ＊あくまでも目安です
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">トータル摂取カロリー：約1800kcal</li>
    <li class="list-group-item">総摂取タンパク質：約70g</li>
    <li class="list-group-item">総摂取脂質：約50g</li>
    <li class="list-group-item">総摂取炭水化物：約290g</li>
    <li class="list-group-item">総摂取塩分：約7g</li>
  </ul>
  @endif
</div>
</div>



<div class="col-sm-6">
<div class="card">
  <div class="card-header">
  {{ $user->name }}さんの本日({{ $user->updated_at->format('Y/m/d') }})の記録
  <form method="get" action="/user/{{ Auth::user()->id }}/reset">
    @csrf
    <input type="submit" value="手動でリセット" class="btn btn-success" onclick='return confirm("本当に1日に摂取した栄養素をリセットしますか？");'>
  </form>
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">
          カロリー：{{ $user->totalCalories }}kcal　　　
          @if($dayNeedsCalories < 0)
          {{ abs($dayNeedsCalories) }}kcal分過剰に摂取しています
          @else
          {{ $dayNeedsCalories }}kcal分不足しています
          @endif
        </li>
        <li class="list-group-item">
          タンパク質：{{ $user->totalProtein }}g　　　
          @if($dayNeedsProtein < 0)
            {{ abs($dayNeedsProtein) }}g分過剰に摂取しています
          @else
            {{ $dayNeedsProtein }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          脂質：{{ $user->totalFat }}g　　　
          @if($dayNeedsFat < 0)
            {{ abs($dayNeedsFat) }}g分過剰に摂取しています
          @else
            {{ $dayNeedsFat }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          炭水化物：{{ $user->totalCarb }}g　　　
          @if($dayNeedsCarb < 0)
            {{ abs($dayNeedsCarb) }}g分過剰に摂取しています
          @else
            {{ $dayNeedsCarb }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          塩分：{{ $user->totalSodium }}g　　　
          @if($dayNeedsSodium < 0)
            {{ abs($dayNeedsSodium) }}g分過剰に摂取しています。積極的に汗を流しましょう。
          @else
            {{ $dayNeedsSodium }}g分不足しています
          @endif
        </li>
      </ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="card" >

  @if($user->gender === 'male')
  <div class="card-header">
  １週間に必要な栄養素の目安(成人男性)
  <br>
  ＊あくまでも目安です
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">1週間トータル摂取カロリー：約17500kcal</li>
    <li class="list-group-item">1週間総摂取タンパク質：約700g</li>
    <li class="list-group-item">1週間総摂取脂質：約560g</li>
    <li class="list-group-item">1週間総摂取炭水化物：約2450g</li>
    <li class="list-group-item">1週間総摂取塩分：約56g</li>
  </ul>
  @endif
  
  @if($user->gender === 'female')
  <div class="card-header">
  １週間に必要な栄養素の目安(成人女性)
  <br>
  ＊あくまでも目安です
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">1週間トータル摂取カロリー：約12600kcal</li>
    <li class="list-group-item">1週間総摂取タンパク質：約490g</li>
    <li class="list-group-item">1週間総摂取脂質：約350g</li>
    <li class="list-group-item">1週間総摂取炭水化物：約2030g</li>
    <li class="list-group-item">1週間総摂取塩分：約49g</li>
  </ul>
  @endif

</div>
</div>

<div class="col-sm-6">
<div class="card" >
  <div class="card-header">
  {{ $user->name }}さんの1週間の記録(月曜1時〜月曜1時)
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">
          カロリー：{{ $user->totalWeekCalories }}kcal　　　
          @if($weekNeedsCalories < 0)
          {{ abs($weekNeedsCalories) }}kcal分過剰に摂取しています
          @else
          {{ $weekNeedsCalories }}kcal分不足しています
          @endif
        </li>
        <li class="list-group-item">
          タンパク質：{{ $user->totalWeekProtein }}g　　　
          @if($weekNeedsProtein < 0)
          {{ abs($weekNeedsProtein) }}g分過剰に摂取しています
          @else
          {{ $weekNeedsProtein }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          脂質：{{ $user->totalWeekFat }}g　　　
          @if($weekNeedsFat < 0)
          {{ abs($weekNeedsFat) }}g分過剰に摂取しています
          @else
          {{ $weekNeedsFat }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          炭水化物：{{ $user->totalWeekCarb }}g　　　
          @if($weekNeedsCarb < 0)
          {{ abs($weekNeedsCarb) }}g分過剰に摂取しています
          @else
          {{ $weekNeedsCarb }}g分不足しています
          @endif
        </li>
        <li class="list-group-item">
          塩分：{{ $user->totalWeekSodium }}g　　　
          @if($weekNeedsSodium < 0)
          {{ abs($weekNeedsSodium) }}g分過剰に摂取しています。積極的に汗を流しましょう。
          @else
          {{ $weekNeedsSodium }}g分不足しています
          @endif
        </li>
      </ul>
</div>
</div>
</div>

@endsection