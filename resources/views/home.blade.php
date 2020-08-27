@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ session('flash_message') }}
</div>
@endif

<div class="center">
  <h3 class="home-text text-center py-3">食べたいものを選んでください</h3>
  <p class="mini-text text-center">このアプリは某牛丼チェーンの商品を擬似的に注文して、PFC(タンパク質、脂質、炭水化物)バランスに基づき栄養を可視化するアプリです。</p>
  <p class="mini-text text-center">料金等は一切かかりませんのでご安心ください</p>
  <div class="row home-row">
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/beef" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">牛丼(牛丼ライト含む)</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/curry" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">カレー</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/morning" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">朝食</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/other" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">海鮮・丼もの</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/sidemenu" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">サイドメニュー</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card homecard">
        <div class="card-body">
          <form action="/setmeal" method="get">
            @csrf
            <button class="btn stretched-link" onfocus="this.blur();">定食</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection