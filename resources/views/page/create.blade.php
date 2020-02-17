@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('pages.store') }}" method='POST'>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' value="{{ old('title') }}" placeholder='Title'>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name='body' rows="3">{{ old('body') }}</textarea>
        </div>
        <input type="hidden" name="is_draft" value="1">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
