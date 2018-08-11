<?php
function timeCalc ($db_timestamp)
{
    date_default_timezone_set('UTC');
    $sys_time = date('d-m-Y H:i:s', time());
    $time_db = strtotime($db_timestamp);
    $current_time = strtotime($sys_time); 
    $minute =  round(abs(($time_db - $current_time)/60+240));
    $hour =  round(abs(($time_db - $current_time)/60/60+4));
    $day =  round(abs(($time_db - $current_time)/60/60/24));
    if($minute < 1)
    {
        echo "a few secs ago ";
    }
    elseif($minute == 1)
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