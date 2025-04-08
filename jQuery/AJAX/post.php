<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<h4>Click to See Some Data</h4>
<button>Click Me !</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.post("for_post.php",
            {
                name  : "Ravi Mali",
                age : 18
            },
             function(data, status){
               console.log(data);
               console.log(status);
            });
        });
    });
</script>