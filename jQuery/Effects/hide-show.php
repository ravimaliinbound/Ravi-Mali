<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is a Paragraph.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
</body>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide();
        });
        $("#show").click(function(){
            $("p").show();
        });
    }); 
</script>