<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .test *{
            border: 1px solid green;
            margin: 10px;
            padding: 10px;
            display: block;
        }
    </style>

    <div class="test" style="width: 500px;">great-great-grand-parent(div)
        <div>great-grand-parent(div)
            <ul>grand-parent(ul)
                <li>parent(li)
                    <span>Hello World!</span>
                </li>
            </ul>
        </div>
    </div>
    <button>Get Ancestors</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("span").parentsUntil("div").css("border", "2px solid red");
        });
    });
</script>