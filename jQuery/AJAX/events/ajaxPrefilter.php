<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>$.ajaxPrefilter() allows you to define a function that runs before every AJAX request</p>
<button>Click</button><br><br>
<div></div>
<p id="first"></p>
<script>
    $(document).ready(function () {
        $.ajaxPrefilter(function (options) {
            // console.log(options);
            // console.log(options.type);
            // console.log(options.url);
            console.log("This will execute before each request");
        });
        $(document).ajaxStart(function () {
            console.log("Ajax Start");
        });
        $(document).ajaxSuccess(function () {
            console.log("Ajax Success");
        });
        $(document).ajaxComplete(function () {
            console.log("Ajax Complete");
        });
        $(document).ajaxStop(function () {
            console.log("All Ajax Request have completed"); // This will executed only once when all request have completed
        });
        $(document).ajaxError(function(){
            console.log("An error occured");
        });
        $("button").click(function () {
            $.ajax({
                url: "test.txt",
                type: "Post",
                success: function (result) {
                    $("div").text(result);
                }
            });
            $("#first").load("test.js");
        });
    });
</script>