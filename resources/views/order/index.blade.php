@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form action="/order" method="get">
@csrf
     <input type="text" name="order" value="{{ old('order', $keyword) }}" placeholder="入力してください">
     <input type="submit" value="検索">
</form>
<p>※検索方法　例(料金):1080　例2(品名):カレー(キーワードを入力)　例3(日付):2020-07-31　例4(時間):17:15:28</p>


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
