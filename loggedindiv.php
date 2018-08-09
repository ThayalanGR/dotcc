<ul class="nav navbar-nav">
    <li class="dropdown nav-item pr-1 pt-1"> 
        <a href="usercredits.php"  class="shadow-sm pt-0 pl-1 pr-2 bg-light rounded"><small><i class="fas fa-chart-line" style="color:green !important;"></i> Credits Score : <span class="green-text" id="totalCreditsHead"></span></small></a>
    </li>
    <li class="dropdown nav-item"> 
    
        <a class="dropdown-toggle dropdown-item nav-link  p-0" data-toggle="dropdown" aria-expanded="false"  href="#">

        <img src="upload/img/<?php if($_SESSION['uimage'] != "") { echo $_SESSION['uimage']; } else { echo "avatar_2x.png"; }  ?>" class="bg-primary" style="max-width:30px; max-height:30px; padding:2px; border-radius:10px;">

            <label class="text-primary"><small><?php echo $_SESSION['name'];?></small></label>

        </a>
            <ul class="dropdown-menu dropdown-menu-right text-center" role="menu" >
                <li role="presentation" class="dropdown-item " ><a href="usercredits.php"><i class="fas fa-chart-line shadow" style="color:green !important;"></i> &nbsp;Credits</a>
                </li>
                <li role="presentation" class="dropdown-item "><a href="useractivity.php"><i class="fas fa-chart-pie shadow" style="color:red !important;"></i> &nbsp;Activity</a>
                </li>
                <li role="presentation" class="dropdown-item "><a href="profile.php"> <i class="fas fa-user-alt shadow" style="color:purple !important;"></i> &nbsp; Profile </a>
                </li>
                <li role="presentation" class=" dropdown-item "><a style="color:#039be5 !important;" href="./logout.php"><i class="fas fa-sign-out-alt shadow"></i>&nbsp;Logout </a>
                </li>
            </ul>
    </li>
</ul>

<!-- calc total credits -->
<?php  
        include('dbconnection.php');
        $uid = $_SESSION['userid'];
        $ret5=mysqli_query($DB,"SELECT * FROM credits where userid='$uid' order by credits_id desc");
        $cnt=0;
        $temp = 0;
        while($row5=mysqli_fetch_array($ret5))
         { $temp += $row5['credits']; 

            if($cnt == 0 ){
                $_SESSION['creditMessage'] =  $row5['reason'];              
                $_SESSION['creditScore'] = $row5['credits'];              
            }
            $cnt++;
        }
        echo "<script> 
                const totalCreditsHead = document.getElementById('totalCreditsHead');
                totalCreditsHead.innerHTML = ".$temp.";
                </script>";
?>
