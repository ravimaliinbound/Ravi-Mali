<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>This will show an error</p>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function(){
        $(document).on("ajaxError",  function(){
            console.log("Something Went Wrong...!");
        });
        $("button").on("click", function(){
            $("div").load("abc.txt"); // Invalid OR Wrong File
        });
    });
</script>