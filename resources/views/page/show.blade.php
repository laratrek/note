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
    <form action="{{ route('pages.destroy', ['page' => $page]) }}" method='POST'>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
