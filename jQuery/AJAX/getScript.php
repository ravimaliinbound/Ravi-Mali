<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Click the button to execute Javascript Code</p>
<button>Click Me !</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.getScript("script.js", function(response, status){
                console.log("response :  " + response);
                console.log("status :  "+status);
            });
        });
    });
</script>