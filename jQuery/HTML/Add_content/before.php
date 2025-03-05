<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is a Paragraph.</p>
    <button>Add</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").before("<b>New Text Added</b>");
        });
    });
</script>