<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click Me !</button><br><br>
<div class="first"></div><br>
<div class="second"></div>
<script>
    $(document).ready(function(){
        $("button").on("click", function(){
            $(".first").load("test.txt");
        });
        $(document).on("ajaxComplete", function(event, xhr, settings){
            if(settings.url =="test.txt"){
                $(".second").text("File Loaded Successfully..!");
                console.log(xhr.responseText);
                // console.log(settings);
            }
            else{
                $(".second").text("Failed To Load File...");
            }
        });
    });
</script>