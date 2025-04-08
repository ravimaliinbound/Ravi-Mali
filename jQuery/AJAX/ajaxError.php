<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>This will show an error</p>
<button>Click Me !</button>
<div></div>
<script>
    $(document).ready(function () {
        $(document).ajaxError(function () {
            alert("An Error Occured !");
        });
        $("button").click(function () {
            $("div").load('abc.txt'); //Wrong File
        });
    });
</script>