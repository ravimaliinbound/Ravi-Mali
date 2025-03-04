<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This will hide and show smoothly.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
</body>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide(500); // hinde() and show() can take parameters : speed in fast, slow or milliseconds
        });
        $("#show").click(function(){
            $("p").show(500); // Note : parameters are optional
        });
    });
</script>