<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div class="test">
    <h2>This is jQuery Content</h2>
</div>
<button>Click to Load</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
           $(".test").load("demo.txt", function(responseText, statusText, xhr){
            if(statusText == "success")
                {
                    alert('File Loaded Successfully');
                }
            if(statusText == "error")
                {
                    alert('Error : ' + xhr.statusText);
                }
           });
        });
    });
</script>