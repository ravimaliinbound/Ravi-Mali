<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<ul class="list">
    <li>Frontend</li>
    <li>Backend
        <ul>
            <li>PHP</li>
            <li>Java</li>
            <li>Python</li>
        </ul>
    </li>
    <li>Database
        <ul>
            <li>MySQL</li>
            <li>Oracle</li>
        </ul>
    </li>
</ul>
<button style="margin-left: 50px;">Click Me !</button>

<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("ul.list > li").css({ "border": "1px solid blue", "margin": "1px" });
        });
    });
</script>