<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<style>
    .home, .profile, .contact{
        color :deepskyblue;
        background: none;
        border: none;
        font-size: 15px;
    }
    .active{
        background-color: deepskyblue;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        color: white;
    }
</style>
<button class="home">Home</button>
<button class="profile">Profile</button>
<button class="contact">Contact</button><br><br>
<div id="all"></div>

<div id="home" style="display: none;">This is <b>Home Page</b>. Clicking another tab will toggle the visibility of this one for the next</div>

<div id="profile" style="display: none;">This is <b>Profile Page</b>. Clicking another tab will toggle the visibility of this one for the next</div>

<div id="contact" style="display: none;">This is <b>Contact Page</b>. Clicking another tab will toggle the visibility of this one for the next</div>


<script>
    $(document).ready(function () {
        $(".home").click(function () {
            $(this).addClass("active");
            $(".profile").removeClass("active");
            $(".contact").removeClass("active");
            $("#all").text(function () {
                $("#home").css({
                    "display": "block",
                    "border": "1px solid",
                    "width": "fit-content",
                    "padding": "15px",
                    "border-radius": "0 0 5px 5px",
                    "border-top": "none"
                });
                $("#profile").css("display", "none")
                $("#contact").css("display", "none");
            });
        });
        $(".profile").click(function () {
            $(".home").removeClass("active");
            $(".contact").removeClass("active");
            $(this).addClass("active");
            $("#all").text(function () {
                $("#profile").css({
                    "display": "block",
                    "border": "1px solid",
                    "width": "fit-content",
                    "padding": "15px",
                    "border-radius": "0 0 5px 5px",
                    "border-top": "none"
                });
                $("#home").css("display", "none")
                $("#contact").css("display", "none");
            });
        });
        $(".contact").click(function () {
            $(this).addClass("active");
            $(".home").removeClass("active");
            $(".profile").removeClass("active");
            $("#all").text(function () {
                $("#contact").css({
                    "display": "block",
                    "border": "1px solid",
                    "width": "fit-content",
                    "padding": "15px",
                    "border-radius": "0 0 5px 5px",
                    "border-top": "none"
                });
                $("#home").css("display", "none")
                $("#profile").css("display", "none");
            });
        });
    });
</script>