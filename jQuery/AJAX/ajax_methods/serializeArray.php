<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<form action="">
    Name : <input type="text" name="name">
    City : <input type="text" name="city">
</form><br>
<button>Click Me !</button>
<div></div>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            var x = $("form").serializeArray();
            $.each(x, function (index, field) {
                $("div").append(field.name + " = " + field.value + " ");
            });
        });
    })
</script>