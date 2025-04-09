<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function(){
        $(document).ajaxSend(function(){
            console.log("Ajax Request Sent");
        });
        $(document).ajaxComplete(function(){
            console.log("Ajax Request Completed");
        });
        $(document).ajaxSuccess(function(){
            console.log("Ajax Request Completed Successfully...!");
        });
        $(document).ajaxStart(function(){
            console.log("Ajax Request Started");
        });
        $(document).ajaxError(function(){
            console.log("An Error Occured...!"); // Executes only when an error occurs
        });
        $("button").click(function(){
            $("div").load("test.txt");
        });
    });
</script>