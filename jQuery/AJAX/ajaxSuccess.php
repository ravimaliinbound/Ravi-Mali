<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Specifies a function to run when an AJAX request completes successfully (without any error).</p>
<button>Click Me !</button><br><br>
<div></div>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Ajax request completed successfully");
        });
        $(document).ajaxError(function(){
            console.log("An Error Occured...!");
        });
        $("button").click(function () {
            $("div").load("test.txt");
        });
    });
</script>