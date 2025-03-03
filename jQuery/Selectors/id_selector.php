<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#id Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").hide();
            });
        });
    </script>
</head>
<body>
    <p id="test">Hello, Click the button to hide me.</p>
    <button>Click</button>
</body>
</html>