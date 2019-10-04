@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row border-top">
        <div class="col-3 border-right border-bottom">
            <a href="#" class="d-block py-2 border-bottom">
                + {{ __('Create new page') }}
            </a>
            <a href="#" class="d-block py-2 border-bottom">
                &gt; Introduction
            </a>
            <a href="#" class="d-block py-2 pl-3 border-bottom">
                  Story
            </a>
            <a href="#" class="d-block py-2 pl-3 border-bottom">
                  History
            </a>
            <a href="#" class="d-block py-2 border-bottom">
                Required
            </a>
            <a href="#" class="d-block py-2 border-bottom">
                Features
            </a>
            <a href="#" class="d-block py-2 border-bottom">
                Q&A
            </a>
        </div>
        <div class="col py-3 px-4 bg-white border-bottom">
            <h1>Introduction</h1>
            <p>
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
            </p>
            <h2>List</h2>
            <ul>
                <li>List</li>
                <li>List</li>
                <li>List</li>
            </ul>
            <ol>
                <li>List</li>
                <li>List</li>
                <li>List</li>
            </ol>
        </div>
    </div>
</div>
@endsection
