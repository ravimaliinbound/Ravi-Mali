<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function () {
        const obj = {
                name: "Ravi",
                surname : "Mali",
                age: 21,
                city: "Mandar"
        };
        $("button").click(function () {
            $("div").text($.param(obj)); // Output : name=Ravi&surname=Mali&age=21&city=Mandar
            console.log($.param(obj));
        });
    });
</script>
