<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function(){
        $(document).ajaxError(function(){
            console.log("An Error Occured..!");
        });
        $(document).ajaxSuccess(function(){
            console.log("Ajax Request Completed Successfully...!");
        });
        $("button").click(function(){
            $.getScript("test.js", function(data, status){
                $("div").text("Loaded Data : " + data);
                console.log(status);
            });
        });
    });
</script>