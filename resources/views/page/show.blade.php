@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <h3 class='h3'>{{$page->title}}</h3>
    </div>
    <div class="row">
        <div class='col'>
            {{$page->body}}
        </div>
    </div>
</div>
@endsection
