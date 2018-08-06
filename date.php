<?php
function timeCalc ($db_timestamp)
{
    date_default_timezone_set('Asia/Kolkata');
    $time_db = strtotime($db_timestamp);
    $current_time = strtotime(date("Y-m-d h:i:s",time()));
    $minute =  round(abs(($time_db - $current_time)/60+721));
    $hour =  round(abs(($time_db - $current_time)/60/60+12));
    $day =  round(abs(($time_db - $current_time)/60/60/24));
    if($minute == 1)
    {
        echo $minute . " min ago ";
    }
    elseif($minute > 1 && $minute < 60)
    {
        echo $minute . " mins ago";
    }
    elseif($minute >=60 && $hour == 1)
    {
        echo $hour . " hr ago";
    }
    elseif($minute >=60 && $hour <24)
    {
        echo $hour . " hrs ago"; 
    }
    elseif($hour >= 24 && $day == 1)
    {
        echo $day . " day ago ";
    }
    elseif($hour >= 24 && $day >1)
    {
        echo $day . " days ago ";
    }
}
?>