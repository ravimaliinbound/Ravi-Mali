<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<input type="radio" name="colors" value="Blue">Blue
<input type="radio" name="colors" value="Green">Green
<input type="radio" name="colors" value="Red">Red
<input type="radio" name="colors" value="Yellow">Yellow
<p></p>
<button>Remove Colors</button>
<script>
    $(document).ready(function () {
        $("input").click(function () {
            $("p").html($("input:checked").val() + ' is Checked');
            $("body").css("background-color", $("input:checked").val());

        });
        $("button").click(function () {
            $("body").css("background-color", "white");
        });
    });
</script>