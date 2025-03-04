<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Hide !</button>
    <p>This is a Paragraph.</p>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide("slow", function(){
                alert('This paragraph is now hidden.');
            });
        });
    });
</script>