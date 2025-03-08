<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>


<button>Cilck Me !</button><br><br>
<div style="height: 100px; width: 100px; background-color: aqua; position: absolute"></div>

<script>
    $.noConflict();
    jQuery(document).ready(function($){
        $("button").click(function(){
            let div = $("div");
            div.animate({height : '300px', width : '100px', opacity : '0.4'});
            div.animate({width : '300', height : '300px', opacity : 1});
            div.animate({height : '100px', width : '300px', opacity : 0.4});
            div.animate({height : '100px', width : '100px', opacity : 1});
            div.animate({left : "100px"})
            div.animate({height : '300px', width : '100px', opacity : '0.4'});
            div.animate({width : '300', height : '300px', opacity : 1});
            div.animate({height : '100px', width : '300px', opacity : 0.4});
            div.animate({height : '100px', width : '100px', opacity : 1});
            div.animate({left : "200px"})
        });
    })
</script>   