<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<p>Creating an Object from a JSON string</p>
<button>Click Me !</button>
<script>
    $(document).ready(function () {
        const str = '{"name" : "Ravi", "age" : 21, "city" : "Mandar"}';
        const obj = JSON.parse(str);
        $("button").click(function () {
            console.log(obj.name);
            console.log(obj.age);
            console.log(obj.city);
            console.log("str = "+ str);
            console.log(obj);
        });
    });
</script>