@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('pages.update', ['page' => $page]) }}" method='POST'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' value="{{ $page->title }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name='body' rows="3">{{$page->body}}</textarea>
        </div>
        <input type="hidden" name="is_draft" value="{{ $page->is_draft }}">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
