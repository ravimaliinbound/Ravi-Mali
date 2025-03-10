<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<style>
    button{
        margin-left: 130px;
    }
</style>
First Name : <input type="text" id="fname"><br><br>
Last Name : <input type="text" id="lname"><br><br>
<button>Submit</button>
<p id="first"></p>
<p id="last"></p>

<script>
    $(document).ready(function(){
        $("#fname").on('input', function(){
           $("button").click(function(){
            $("#first").text("First Name Changed");
           });
        });
        $("#lname").on('input', function(){
            $("button").click(function(){
                $("#last").text("Last Name Changed");
            });
        });
    });
</script>