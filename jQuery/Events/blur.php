<script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>

<body>
    Name : <input type="text"><br><br>
    Email : <input type="Emial">
</body>
<script>
    $(document).ready(function(){
        $("input").focus(function(){
            $(this).css("background-color", "deepskyblue");
        });
        $("input").blur(function(){
            $(this).css("background-color","");
        });
    });
</script>