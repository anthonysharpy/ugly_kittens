<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Ugly Kitty Adoption Team</title>

        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/header.css" rel="stylesheet">
        <script src="/js/global-scripts.js"></script>
    </head>

    <body">
        <div class="annoying-popup-background">
            <div class="annoying-popup-border">
                <div class="annoying-popup-textbox">
                    <p style="font-size: 2.08333vw">THIS IS ONE OF THOSE ANNOYING POPUPS!</p>
                    <p style="font-size: 1.302083vw; margin-top: 4.25vw; text-decoration: underline"><i>Dear user, are you enjoying my website? If so, then</i></p>
                    <p style="font-size: 5vw; margin-top: 3.75vw;">PLEASE EMPLOY ME!</p>
                    <button onclick="closePopup()"><b>YES</b></button>
                    <button onclick="closePopup()"><b>MAYBE</b></button>
                    <button><b>NO</b></button>
                </div>
            </div>
        </div>

        <div class="main-wrapper">
            <div class="header">
                <button onclick="onClickIndexButton()"><b>Home</b></button>
                <button onclick="onClickOurCatsButton()"><b>Our Cats</b></button>
                <button onclick="onClickOurTeamButton()"><b>Our Team</b></button>
                <button onclick="onClickContactUsButton()"><b>Contact Us</b></button>
                <img src="/images/logo.jpg">
                <p>Because even ugly cats deserve a home.<p>
            </div>
            @yield('index')
            @yield('ourcats')
            @yield('contactus')
            @yield('catviewer')
            @yield('ourteam')
            <div class="footer">
                <p>© Copyright UKAT 2020</p>
            </div>
        </div>
    </body>
</html>

