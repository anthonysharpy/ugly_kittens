@extends('layouts.layout')

@section('ourcats')

<link href="/css/ourcats.css" rel="stylesheet">
<script src="/js/annoying-popup.js"></script>

<div class="written-content">
    <H2>Our Cats</H2>
    <p style="text-align: center;">Browse our cats currently up for adoption.</p>
    <br>
    <div>
        @for($n = 0; $n < count($cats); $n = $n+1)
            <div class="image-pair">
                <div class="cat-preview-image" onclick="onClickCatPicture('{{$n+1}}')">
                    <img src="/images/cats/cat{{$n+1}}.jpg">
                    <p>{{$cats[$n]["name"]}}</p>
                </div>

                @php
                    $n = $n+1;
                @endphp

                @if($n < count($cats)) {{-- create a second one if there's more to go --}}
                    <div class="cat-preview-image" onclick="onClickCatPicture('{{$n+1}}')">
                        <img src="/images/cats/cat{{$n+1}}.jpg">
                        <p>{{$cats[$n]["name"]}}</p>
                    </div>
                @endif

                @php
                    $n = $n+1;
                @endphp

                @if($n < count($cats)) {{-- create a third one! --}}
                    <div class="cat-preview-image" onclick="onClickCatPicture('{{$n+1}}')">
                        <img src="/images/cats/cat{{$n+1}}.jpg">
                        <p>{{$cats[$n]["name"]}}</p>
                    </div>
                @endif
                <br>
                <br>
            </div>
        @endfor
    </div>
</div>
@endsection