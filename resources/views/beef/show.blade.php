@extends('layouts.app')

@section('content')

{{ $beef->name }}
金額{{ $beef->price }}円
カロリー：{{ $beef->calories }}kcal
タンパク質：{{ $beef->protein }}g
脂質：{{ $beef->fat }}g
炭水化物：{{ $beef->carb }}g
塩分：{{ $beef->sodium }}g

<form action="/beef" method="get">
@csrf
<button class="btn btn-primary">牛丼一覧に戻る</button>
</form>

@endsection