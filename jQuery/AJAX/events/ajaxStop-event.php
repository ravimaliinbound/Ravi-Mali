<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div class="first"></div>
<script>
    $(document).ready(function () {
        $(document).on("ajaxStop", function () {
            console.log("All ajax request have completed");
        });
        $(document).on("ajaxComplete", function () {
            console.log("Ajax Request Completed..!");
        });
        $(document).on("ajaxStart", function () {
            console.log("Ajax Request Started");
        });
        $(document).on("ajaxSuccess", function () {
            console.log("Ajax Request Completed Successfully");
        });
        $(document).on("ajaxError", function () {
            console.log("An Error Occured...!");
        });
        $("button").on("click", function () {
            $(".first").load("test.txt");
        });
    });
</script>