<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Setting default URL and success with $.ajaxSetup().</p>
<button>Click Me !</button>
<h3></h3>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            url : "test.txt",
            success  : function(data){
                $("h3").text(data);
            }
        });
        $("button").click(function(){
            $.get();
            console.log("Hello");
        });
    }); 
</script>