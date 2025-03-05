<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This  is a paragraph.</p>
    <button>Change Text</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").text("Paragraph Changed.")
            $("p").text(function(i, old){
                alert("Old Text is : " + old + " New Text is : Paragraph Changed!");
            });
        });
    });
</script>