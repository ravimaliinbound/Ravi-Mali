<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>ajaxSend event</p>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function () {
        $(document).on("ajaxSend", function () {
            console.log("Ajax Request Sent Successfully...!");
        });
        $(document).on("ajaxStart", function(){
            console.log("Ajax Request Started");
        });
        $("button").on("click",function () {
            $("div").load("test.txt");
        });
    });
</script>