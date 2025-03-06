<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

    <style>
        .test *{
            border: 1px solid green;
            margin: 10px;
            padding: 10px;
            display: block;
        }
    </style>

    <div class="test" style="width: 300px; border: 1px solid green;">
        <p>
            <span>First Element</span>
        </p>
         <p>
            <span>Second Element</span>
        </p>
        <p>
            <span>Third Element</span>
        </p>
    </div><br>
    <button>Get All Descendants</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").find("*").css("border", "2px solid red");
        });
    });
</script>