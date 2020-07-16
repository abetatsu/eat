@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
     <div class="alert alert-success">
          {{ session('flash_message') }}
     </div>
@endif

<div class="center">
<div class="row">
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
