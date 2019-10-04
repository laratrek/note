@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <h3 class='h3'>Pages</h3>
    </div>
    <div class="row justify-content-center">
    @forelse ($pages as $page)
        <div class="col-md-2">
            {{$page->title}}
        </div>
        <div class="col-md-8">
            {{Str::limit($page->body, 20, '...')}}
        </div>
    @empty
        <p>Nothing Page.</p>
    @endforelse
    </div>
</div>
@endsection
