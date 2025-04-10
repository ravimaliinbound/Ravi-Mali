<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button><br><br>
<div></div>
<p></p>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Ajax Request Completed Successfully...!"); // Executes on each request success
        });
        $("button").click(function () {
            $.ajax({
                url: "test.txt",
                success: function (result) {
                    $("div").text(result);
                }
            });
        });
        $("button").mouseleave(function () {
            $("p").load("test.js");
            console.log("Hello");
        });
    });
</script>