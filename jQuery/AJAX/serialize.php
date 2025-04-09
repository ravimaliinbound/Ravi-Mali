<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<form action="">
  Name  :  <input type="text" name="name" id="">
  City  :  <input type="text" name="city" id="">
  Address : <textarea name="address" id=""></textarea>
</form><br>
<button>Click Me !</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            console.log("form elements : "+ $("form").serialize());
            console.log("input fields : "+ $("input").serialize());
            console.log("textarea : " + $("textarea").serialize());
        });
    });
</script>