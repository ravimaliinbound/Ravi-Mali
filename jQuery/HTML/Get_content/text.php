<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Show Text</button>
    <p>This is a <b>bold</b> Paragraph</p>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert($("p").text());
        });
    });
</script>