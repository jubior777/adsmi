<!DOCTYPE html>
<html lang="es">
<?php
include('Head.php');
?>
<body>
<section id="container" class="">
    <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                            class="icon_menu"></i></div>
            </div>
            <?PHP include('Logo.php') ?>
        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
<!--                              <input class="form-control" placeholder="Search" type="text">-->
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
      <?PHP include ('DropDown.php'); ?>
    </header>
 <?PHP include ('Menu.php')?>

</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> PRINCIPAL</h3>
                <ol class="breadcrumb">
                <li><i class="fa fa-laptop"></i> Principal</li>
                </ol>
            </div>
        </div>


        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <td align="center">
                    <a href="LogoutUser.php" >
                        <img src="<?php echo $urlViews; ?>img/salirSistema.png">
                    </a>
                </td>
                <td align="center">
                    <a href="LogoutUserCloud.php" >
                        <img src="<?php echo $urlViews; ?>img/nube.png">
                    </a>
                </td>
            </tr>
            </thead>
        </table>


        </table>
    </section>
</section>
<!--main content end-->

<?PHP include ('LibraryJs.php'); ?>
</body>
</html>