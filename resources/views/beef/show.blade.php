@extends('layouts.app')

@section('content')
<form action="/beef" method="get">
  @csrf
<button class="btn btn-primary">牛丼一覧に戻る</button>
</form>


<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
      {{ $beef->name }} ¥{{ $beef->price }}
      </div>
      <ul class="list-group list-group-flush">
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
    </div>

    <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
      {{ $user->name }}さんの本日({{ $user->updated_at->format('Y/m/d') }})の記録
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
          塩分：{{ $user->totalSodium }}g<br>
          @if($dayNeedsSodium < 0)
            {{ abs($dayNeedsSodium) }}g分過剰に摂取しています。積極的に汗を流しましょう。
          @else
            {{ $dayNeedsSodium }}g分不足しています
          @endif
        </li>
      </ul>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="card">
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
          塩分：{{ $user->totalWeekSodium }}g<br>
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