<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<style>
    table{
        border: 1px solid #bbff99;
        border-collapse: collapse;
    }
    table tr td{
        width: 200px;
}
</style>
<table border = "1" cellpadding ="5" cellspacing ="0">
    <th>Student Name</th>
    <th>Marks  in Science</th>
    <tr>
        <td>Janet</td>
        <td>85.00</td>
    </tr>
    <tr>
        <td>David</td>
        <td>92.00</td>
    </tr>
    <tr>
        <td>Arthur</td>
        <td>79.00</td>
    </tr>
    <tr>
        <td>Bill</td>
        <td>82.00</td>
    </tr>
</table>

<script>
    $(document).ready(function(){
        $("tr:odd").css("background-color", "#bbff99")
    })
</script>