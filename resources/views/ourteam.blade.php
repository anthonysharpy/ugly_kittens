@extends('layouts.layout')

@section('ourteam')

<link href="/css/ourteam.css" rel="stylesheet">

<div class="written-content">
    <br>
    <div class="team-pictures-frame">
        <button onclick="onPressPreviousImage()"><</button>
        <div class="team-image" id="1"> <!-- I've hard-coded these in because staff members aren't the kinds of things that change frequently ... nor do charities usually keep a MySQL database of all their staff members ... -->
            <img src="/images/staff/team1.jpg">
        </div>
        <div class="team-image" id="2">
            <img src="/images/staff/team2.jpg">
        </div>
        <div class="team-image" id="3">
            <img src="/images/staff/team3.jpg">
        </div>
        <div class="team-image" id="4">
            <img src="/images/staff/team4.jpg">
        </div>
        <div class="team-image" id="5">
            <img src="/images/staff/team5.jpg">
        </div>
        <button onclick="onPressNextImage()" style="left:550px">></button>
    </div>
    <div class="team-description">
        <H2 id="person-name">Unknown Person</H2>
        <p id="person-description" style="text-align: center;">Unknown.</p>
    </div>
</div>

<script src="/js/gallery.js"></script>
@endsection