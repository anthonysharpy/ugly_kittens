@extends('layouts.layout')

@section('catviewer')

<link href="/css/catviewer.css" rel="stylesheet">

<div class="written-content">
    <div class="cat-viewer-content">
        <H2>{{$cats[$cat-1]["name"]}}</H2>
        <H3>Age: {{$cats[$cat-1]["age"]}}</H3>
        <div class="cat-viewer-image">
            <img src="/images/cats/cat{{$cat}}.jpg" style="cat-viewer-image">
        </div>
        <p>{{$cats[$cat-1]["desc"]}}</p>
    </div>
</div>
@endsection