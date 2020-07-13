@extends('layouts.app')


@section('content')

@foreach($beefs as $beef)
<a href="/beef/{{ $beef->id }}">{{ $beef->name }}</a>
{{ $beef->price }}円

<form method="post" action="/user">
     @csrf
<input type="hidden" name="beef_id" value="{{ $beef->id }}">
<button type="submit" class="btn btn-primary">注文</button>
</form>


@endforeach

@endsection