@extends('layouts.layout')

@section('index')
<div class="written-content">
    <H2>Our Mission</H2>
    <p>Here at UKAT we aim to provide each and every cat with a loving home, no matter how horrifically ugly they may be. We are an independent organisation funded by members of the public who really ought to know better.</p>
    <br>
    <H2>Our Cats</H2>
    <p>Click below to browse our selection of cats currently available for adoption.</p>
    <br>
    <a href="/ourcats" style="text-decoration: none; color: black;">
        <div class="ourcats-preview-link">
            <div>
                @for($i = 0; $i < 4 && $i < count($cats); $i++)
                    <img src="/images/cats/cat{{$i+1}}.jpg">
                    @if(($i+1) % 2 == 0)
                        <br>
                    @endif
                @endfor
            </div>
            <div class="ourcats-preview-link-title">
                <p>Come Say Hi!</p>
            </div>
        </div>
    </a>
</div>
@endsection