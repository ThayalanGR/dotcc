<ul class="nav navbar-nav" style="float:right; padding:0px;">
    <li class="dropdown nav-item"> <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
        href="#">

        <img src="upload/img/<?php echo $_SESSION['uimage']; ?>" class="dropdown-image">

        <label><?php echo $_SESSION['name'];?></label>

        </a>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li role="presentation" class="dropdown-item"><a href="profile.php">Credits</a>
            </li>
            <li role="presentation" class="dropdown-item"><a href="profile.php">Activity</a>
            </li>
            <li role="presentation" class="dropdown-item"><a href="profile.php">Profile </a>
            </li>
            <li role="presentation" class="active dropdown-item"><a href="./logout.php">Logout </a>
            </li>
        </ul>
    </li>
</ul>