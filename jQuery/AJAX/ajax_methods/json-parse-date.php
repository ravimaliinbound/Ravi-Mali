<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Converting a string into a date</p>
<button>Click</button>
<script>
    $(document).ready(function(){
        const str = '{"name": "Ravi", "city": "Mandar", "dob": "02-04-2003"}';
        const obj = JSON.parse(str);
        console.log(obj.dob)
        obj.dob = new Date();
        $("button").click(function(){
            console.log(obj.dob);
        });
    });
</script>