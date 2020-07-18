@extends('layouts.app')

@section('content')

@if (Request::has('sidemenu'))
<form action="/sidemenu" method="get">
    @csrf
<button class="btn btn-primary">サイドメニューMENU一覧へ</button>
</form>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
   {{ $error }}
    @endforeach
</div>
@endif

<form method="get" action="/sidemenu">
     <input type="text" name="sidemenu">
     <input type="submit" value="検索">
</form>

<div class="row">
@foreach($sidemenus as $sidemenu)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="/sidemenu/{{ $sidemenu->id }}">{{ $sidemenu->name }}</a></h5>
        <p class="card-text">{{ $sidemenu->price }}円</p>
        <form method="post" action="/user">
          @csrf
        <input type="hidden" name="sidemenu_id" value="{{ $sidemenu->id }}">
        <button type="submit" class="btn btn-primary">注文</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
</div>

<div class="row justify-content-center">
     {{ $sidemenus->appends(['sidemenu' => Request::get('sidemenu')])->links() }}
</div>

@endsection