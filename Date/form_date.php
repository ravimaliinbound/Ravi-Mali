<?php
if(isset($_REQUEST['submit']))
{
    $date1= $_POST['date1'];
    $date2 = $_POST['date2'];
    // var_dump($date1);
    // echo "<br>";
    // var_dump($date2);
    $date1 = new DateTime($date1);
    echo "First Date : ". date_format($date1,"d-M-Y"); 
    echo "<br>";
    $date2 = new DateTime($date2);
    echo "Second Date : ". date_format($date2,"d-M-Y");
    echo "<br>";
    $diff = date_diff($date1,$date2);
    echo "Difference is : ". $diff->y." Years ". $diff->m ." Months ". $diff->d." Days " .$diff->h. " Hours ".$diff->i. " Minutes ";
}
?> 
