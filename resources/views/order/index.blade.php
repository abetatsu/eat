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
     <input type="text" name="order" value="{{ old('order', $keyword) }}">
     <input type="submit" value="検索">
</form>


<div class="card">
  <div class="card-body">
  こちらは{{ $user->name }}さんのこれまでの注文履歴です
  </div>
</div>

<div class="card">
  <ul class="list-group list-group-flush">
  @foreach($orders as $order)
    <li class="list-group-item">{{ $order->created_at->format('Y年n月d日　G時i分') }}　{{ $order->order_name }}　¥{{ $order->order_price }}</li>
  @endforeach
  </ul>
</div>

<div class="row justify-content-center">
     {{ $orders->links() }}
</div>
@endsection
