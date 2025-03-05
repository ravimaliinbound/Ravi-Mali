<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p class="test">This is a Paragraph.</p>
    <button>Change CSS</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $(".test").css({"color":"green", "fontSize":"25px"});
        });
    });
</script>