<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>ajaxStop()</p>
<p>	Specifies a function to run when all AJAX requests have completed</p>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function(){
        $(document).ajaxStop(function(){
            console.log("All Ajax requests have completed");
        });
        $(document).ajaxStart(function(){
            console.log("Ajax Request Started");
        });
        $(document).ajaxError(function(){
            console.log("An Error Occured..!");
        });
        $(document).ajaxComplete(function(){
            console.log("Ajax Request Completed");
        });
        $(document).ajaxSuccess(function(){
            console.log("Ajax Request Completed Successfully");
        });
      
        $("button").click(function(){
            $("div").load("test.txt");
        });
    });
</script>