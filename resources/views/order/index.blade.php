@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  {{ $error }}
  @endforeach
</div>
@endif

@if(!empty($message))
<div class="alert alert-success">
  {{ $message }}
</div>
@endif

<form action="/order" method="get">
  @csrf
  <label for="date">日付で検索</label>
  <input id="date" type="date" name="date" value="{{ old('date', $date) }}">
  <label for="time">時間で検索</label>
  <input type="time" name="time" id="time" value="{{ old('time', $time) }}">
  <label for="item">商品名で検索</label>
  <input type="text" name="item" id="item" value="{{ old('item', $item) }}">
  <label for="amount">金額で検索</label>
  <input type="text" name="amount" id="amount" value="{{ old('amount', $amount) }}">
  <input type="submit" value="検索">
</form>

<div class="card">
  <div class="card-body">
    こちらは{{ $user->name }}さんのこれまでの注文履歴です
    <form method="get" action="/order">
      @csrf
      <button class="btn btn-primary">全ての注文履歴を表示</button>
    </form>
  </div>
</div>

<div class="card">
  <ul class="list-group list-group-flush">
    @foreach($orders as $order)
    <li class="list-group-item">{{ $order->created_at->format('Y年n月j日　G時i分') }}　{{ $order->order_name }}　¥{{ $order->order_price }}</li>
    @endforeach
  </ul>
</div>

<div class="row justify-content-center">
  {{ $orders->links() }}
</div>
@endsection