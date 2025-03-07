<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div id="test1"><h2>Load All Content From demo.txt</h2></div>
<button id="first">Click to Change</button>

<div id="test2"><h2>Load Only Paragraph from demo.txt</h2></div>
<button id="second">Click to Change</button>

<script>
    $(document).ready(function(){
        $("#first").click(function(){
            $("#test1").load('demo.txt');
        });
        $("#second").click(function(){
            $("#test2").load('demo.txt p');
        });
    });
</script>