<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tr : even Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
<script>
        $(document).ready(function(){
           $("button").click(function(){
            $("tr:even").css("background-color", "Yellow");
            $("tr:odd").css("background-color", "red");
           });
        });
    </script>
</head>

<body>
    <table border="1" cellpadding = "10" cellspacing = "5">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>Hindi Literature</td>
            <td>89</td>
        </tr>
        <tr>
            <td>English Compulsory</td>
            <td>97</td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td>96</td>
        </tr>
        <tr>
            <td>Social Science</td>
            <td>93</td>
        </tr>
        <tr>
            <td>Sanskrit</td>
            <td>96</td>
        </tr>
    </table>
    <br>
    <p>Click the button to change the color</p>
    <button>Click</button>

</body>

</html>