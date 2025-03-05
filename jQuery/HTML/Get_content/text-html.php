<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button id="text">Show Text</button>
    <button id="html">Show HTML</button>
    <p>This is a <b>bold</b> Paragraph.</p>
</body>
<script>
    $(document).ready(function(){
        $("#text").click(function(){
            alert($("p").text());
        });
        $("#html").click(function(){
            alert($("p").html());
        });
    });
</script>