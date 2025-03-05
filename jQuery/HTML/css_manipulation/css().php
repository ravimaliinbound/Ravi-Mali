<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <h2 class="test">This is a Heading</h2>
    <p class="test">This is a Paragraph</p>
    <button>Change</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $(".test").css("color", "deepskyblue");
        });
    });
</script>