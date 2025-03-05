<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is a Paragraph</p>
    <button>Change</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").text("Hello World");
        });
    });
</script>