<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>: button Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $(":button").hide();
            });
        });
    </script>
</head>

<body>
    <p>This is a Paragraph</p>
    <h4>This is a Heading</h4>
    <p><button>CLick</button></p>
    <p><button>CLick</button></p>
    <p><button>CLick</button></p>
    <p><button>CLick</button></p>
    <p><b>Note : </b>All buttons will be hidden in a single click.</p>
</body>

</html>