<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Click to serialize object</p>
<button>Click Me !</button>
<script>
    $(document).ready(function(){
        personObj = new Object();
        personObj.name = "Ravi";
        personObj.age = 21;
        personObj.city = "Mandar";
        $("button").click(function(){
            console.log($.param(personObj));
        });
    });
</script>