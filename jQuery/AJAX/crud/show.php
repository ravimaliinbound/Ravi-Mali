<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<style>
    * {
        font-family: sans-serif;
    }

    #delete {
        width: fit-content;
        padding: 8px 10px;
        border-radius: 5px;
        margin: 10px auto;
        color: red;
        font-size: 20px;
    }
</style>
<h1 style="text-align: center; background-color: deepskyblue; padding: 10px">PHP AJAX</h1>
<button id="load-btn" style="margin-left: 730px;">Load Data</button><br><br>
<button id="add" style="margin-left: 730px;">Add Row</button><br><br>
<div id="delete"></div>
<table id="main-table" border="1" cellspacing="0" cellpadding="5" style="margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Language</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    <tr id="tbl-row">
        <td>1</td>
        <td>Ravi</td>
        <td>ravi@gmail.com</td>
        <td>Male</td>
        <td>Hindi, English</td>
        <td>Mandar</td>
        <td>
            <a href="#" class="edit">Edit</a>
            <a href="#" class="delete">Delete</a>
        </td>
    </tr>

</table>

<script>
    $(document).ready(function () {
        $("#load-btn").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                url: "action.php",
                type: "POST",
                data: { action: "Fetch" },
                success: function (data) {
                    $("#main-table").html(data);
                }
            });
        });
        $("#add").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                url: "form.php",
                type: "POST",
                success: function () {
                    // window.location = "form.php";
                    $("body").load("form.php");

                }
            });
        });
        $("body").on("click", ".edit", function (e) {
            e.preventDefault();
            alert("jhhh");
            var id = $(this).closest("tr").find("td:eq(0)").text();
            var name = $(this).closest("tr").find("td:eq(1)").text();
            var email = $(this).closest("tr").find("td:eq(2)").text();
            var gender = $(this).closest("tr").find("td:eq(3)").text();
            var language = $(this).closest("tr").find("td:eq(4)").text();
            var city = $(this).closest("tr").find("td:eq(5)").text();
            $.ajax({
                url: "edit.php",
                type: "POST",
                data: {
                    "id": id, "name": name, "email": email, "email": email, "gender": gender,
                    "language": language, "city": city
                },
                success: function (data) {
                    $("body").load("edit.php");
                }
            });
        });
        $("body").on("click", ".delete", function (e) {
            e.preventDefault();
            var id = $(this).closest("tr").find("td:eq(0)").text();
            console.log(id);
            $.ajax({
                url: "action.php",
                type: "POST",
                data: { action: "Delete", "id": id },
                success: function (data) {
                    $("#delete").html(data);
                }
            });
        });
    });
</script>