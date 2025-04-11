<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click Me !</button>
<br><br>
<div>Hey</div>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Ajax request completed successfully...!");
        });
        $("button").click(function () {
            $("div").load("test.txt", function(data){
                console.log(data);
            });
        });
    });
</script>