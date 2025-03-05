<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Add</button>
    <p>This is a Paragraph.</p>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").after("<b>New Text Added. </b>");
        });
    });
</script>