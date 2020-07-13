
@extends('layouts.app')

@section('content')

１日必要な栄養素の目安(成人男性)＊あくまでも目安です<br>
トータル摂取カロリー：2500kcal
総摂取タンパク質：100g
総摂取脂質：80g
総摂取炭水化物：350g
総摂取塩分：8g
<br>

＊栄養素は深夜12時にリセットされます。使ったお金はリセットされません。
<br>
本日の記録
<br>
トータル摂取カロリー：{{ $user->totalCalories }}kcal
総摂取タンパク質：{{ $user->totalProtein }}g
総摂取脂質：{{ $user->totalFat }}g
総摂取炭水化物：{{ $user->totalCarb }}g
総摂取塩分：{{ $user->totalSodium }}g
<br>
牛丼屋に使った金額合計：{{ $user->totalPrice }}円

@endsection