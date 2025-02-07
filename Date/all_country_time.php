<?php
echo "<h3>Want To Seen Time ?</h3>";
echo "<p>Please Select Country</p>";
?>
<form action="#time" method="post">
    <select name="country">
        <option value="GMT">Select Country</option>
        <option value="Asia/kolkata">India</option>
        <option value="EST">America</option>
        <option value="Australia/Sydney">Australia</option>
        <option value="Asia/Karachi">Pakistan</option>
        <option value="Asia/Katmandu">Nepal</option>
        <option value="Asia/Tokyo">Japan</option>
        <option value="Asia/Taipei">China</option>
        <option value="Asia/Pyongyang">Korea</option>
    </select>
    <input type="submit" name="show_time" value="Show Time">
</form>
<div id="time">
    <?php
    if (isset($_REQUEST['show_time'])) {
        $timezone = $_POST['country'];
        date_default_timezone_set($timezone);
        echo "Current Time is : " .date("h:i:s A");
    } else {
        echo "Please Select Country";
    }
    ?>
</div>