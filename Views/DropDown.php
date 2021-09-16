<div class="top-nav notification-row">
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                    <img src="<?PHP echo $urlViews .$imageUser;?>" alt="Usuario" height="35" width="35">
                </span>
                <span class="username"> <?PHP echo $userLogueado; ?> </span>
                <b class="caret"></b>
            </a>
            <?PHP include('MenuOpciones.php'); ?>
        </li>

    </ul>
</div>

