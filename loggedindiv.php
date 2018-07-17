<ul class="nav navbar-nav" style="float:right; padding:0px;">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span>
        <img src="upload/img/<?php echo $_SESSION['uimage']; ?>" class="dropdown-image">
        <label><?php echo $_SESSION['name'];?></label>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li role="presentation"><a href="profile.php">Played Games</a></li>
            <li role="presentation"><a href="profile.php">Points earned</a></li>
            <li role="presentation"><a href="profile.php">Profile </a></li>
            <li role="presentation" class="active"><a href="./logout.php">Logout </a></li>
        </ul>
    </li>                    
</ul>