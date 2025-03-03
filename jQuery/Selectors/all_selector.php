<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>* Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("*").hide();
            });
        });
    </script>
</head>
<body>
    <h2>* Selector</h2>
    <p>Hello jQuery</p>
    <p>It will hide all HTML elements.</p>
    <button>Click</button>
</body>
</html>