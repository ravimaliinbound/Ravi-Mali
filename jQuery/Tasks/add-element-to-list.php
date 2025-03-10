<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
</ul>
<button>Add More</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").append("<li>jQuery</li>");
        });
    });
</script>