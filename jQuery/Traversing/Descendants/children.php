<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <style>
        .test * {
            border: 1px solid green;
            margin: 10px;
            padding: 10px;
            display: block;
        }
    </style>

    <div class="test" style="width: 500px;">
        <ul>current element (ul)
            <li>Apple (child)</li>
            <li>child
                <span>Banana (grand-child)</span>
            </li>
            <li>Mango (child)</li>
        </ul>
    </div>
    <button>Get Descendants</button>
</body>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("ul").children().css("border", "2px solid red");
        });
    });
</script>