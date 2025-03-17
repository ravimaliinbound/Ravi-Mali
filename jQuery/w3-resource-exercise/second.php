<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<textarea name="" id="">TutoRIAL</textarea>
<p>jQuery</p>
<p>JavaScript</p>
<button>Click</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("textarea, p").css("background-color", "red");
        });
    });
</script>