<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<br><br>
<div></div>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Ajax request completed successfully...!");
        });
        $("button").click(function () {
            $.getJSON("test.json", function (data) {
                console.log(data);
                // console.log(data.name);
                // console.log(data.city);
                // console.log(data.age);
            });
        });
    });
</script>