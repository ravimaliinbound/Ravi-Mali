<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<button>Serialize Object</button>
<p></p>
<script>
    $(document).ready(function(){
        const student = new Object();
        student.fname = "Ravi";
        student.lname = "Mali";
        student.age = 20;
        student.city = "Mandar";

        $("button").click(function(){
            $("p").text($.param(student));
        });
    });
</script>