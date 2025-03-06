<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>This is a Paragraph</p>
<p>This is a Paragraph</p>
<p>This is a Paragraph</p>
<p>This is a Paragraph</p>
<p>This is a Paragraph</p>
<button>Filter with index</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").eq(2).css({"background-color":"yellow", "width":"130px","padding":"5px", "color":"red"});
        });
    });
</script>