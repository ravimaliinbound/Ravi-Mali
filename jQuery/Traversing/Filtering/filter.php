<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>This is a Paragraph</p>
<p class="test">Hello World1</p>
<p class="test">Hello World1</p>
<p>This is a Paragraph</p>
<button>Filter with class="test"</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").filter(".test").css({"background-color":"yellow", "width":"110px", "color":"red", "padding":"5px"});
        });
    });
</script>