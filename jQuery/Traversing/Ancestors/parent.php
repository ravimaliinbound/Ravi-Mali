<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .test *{
            border: 1px solid green;
            display: block;
            margin: 10px;
            padding: 10px;
        }
    </style>

    <div class="test">
        <div style="width: 300px;">great-grand-parent(div)
            <ul>grand-parent(ul)
                <li>parent(li)
                    <span>Hello World</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="test" style="width: 340px;">
        <ul>grand-parent(ul)
            <li>parent(li)
                <span>Hello World</span>
            </li>
        </ul>
    </div>
    <button>Get Direct Parent</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("span").parent().css("border", "3px solid red")
        });
    });
</script>