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

    <div class="test" style="width: 500px;">great-grand-parent(div)
        <ul>grand-parent(ul)
            <li>parent(li)
                <span>Hello World!</span>
            </li>
        </ul>
    </div>
    <button>Get All Parents </button>
    <p><b>Note : </b>The <b>parents()</b> method will return all Ancestors up to the &lt;html&gt; element.</p>
</body>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("span").parents().css("border", "2px solid red");
        });
    });
</script>