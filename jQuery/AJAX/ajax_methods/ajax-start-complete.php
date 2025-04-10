<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click Me !</button>
<br><br>
<div></div>
<h1 style="display: none;">Loading File ...!</h1>
<script>
    $(document).ready(function(){
        $(document).ajaxStart(function(){
            $("h1").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            $("h1").css("display", "none");
        });
        $("button").click(function(){
            $("div").load("test.txt");
        });
    });
</script>