<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<script>
    $(document).ready(function(){
        const students = '["Ravi", "Rajesh", "Karan", "Ashish"]';
        const stuArr =JSON.parse(students);
        $("button").click(function(){
            console.log(stuArr[0]);
            console.log(stuArr[2]);
        });
    });
</script>