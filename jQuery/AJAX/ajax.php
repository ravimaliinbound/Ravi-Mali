<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<div>Click to change the content</div>
<button>Click Me !</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({url : "test.txt",success : function(data){
            // $.ajax({url : "tes.txt",success : function(data){
                $("div").text(data);
                console.log("Content Changed Successfully")
            }, beforeSend : function(){
                console.log("Changing Content Please Wait...!");
            }, error : function(status, xhr, error){
                console.log(error);
            }});
        });
    });
</script>