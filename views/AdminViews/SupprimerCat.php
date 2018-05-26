
<?php
require_once "../../Controllers/CategorieDAO.php";
require_once ('../../utils/GetConnexion.php');
session_start();
if (!isset($_SESSION['log'])) {
    header('location: 404.php');
}
$catDao=new CategorieDAO();
$donnee=$catDao->getAllCategorieController();
$response=null;
if (isset($_POST["categorie"]))
{
    $categorie=$_POST["categorie"];
    $response=$catDao->deleteCategorieController($categorie);
    $donnee=$catDao->getAllCategorieController();

}
?>
<html lang="en">

<!-- Mirrored from uxliner.com/niche/main/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 21:37:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="../assets/dist/bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/style.css">
    <link rel="stylesheet" href="../assets/dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="../assets/dist/css/themify-icons/themify-icons.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo blue-bg">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="../assets/dist/img/logo-n.png" alt=""></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="../assets/dist/img/logo.png" alt=""></span> </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar blue-bg navbar-static-top">
            <!-- Sidebar toggle button-->
            <ul class="nav navbar-nav pull-left">
                <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
            </ul>
            <div class="pull-left search-box">
                <form action="#" method="get" class="search-form">
                    <div class="input-group">
                        <input name="search" class="form-control" placeholder="Search..." type="text">
                        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
                </form>
                <!-- search form --> </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="../assets/dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Alexander Pierce</span> </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <div class="pull-left user-img"><img src="../assets/dist/img/img1.jpg" class="img-responsive" alt="User"></div>
                                <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                                <div class="view-link text-left"><a href="#">View Profile</a> </div>
                            </li>
                            <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                            <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../UserViews/index.php?bool=true"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="image text-center"><img src="../assets/dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
                <div class="info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Categorie</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li><a href="AjouterCat.php">Ajouter une categorie</a></li>
                        <li><a href="ModifierCat.php">Modifier une Categorie </a></li>
                        <li><a href="SupprimerCat.php">Supprimer une categorie</a></li>
                    </ul>
                </li>
                <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>Produits</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li><a href="AjouterProduit.php">Ajouter un produit</a></li>
                        <li><a href="ModifierProduit.php">Modifier un produit </a></li>
                        <li><a href="SupprimerProduit.php">Supprimer un produit</a></li>
                        <li><a href="ListeProduit.php">Liste des produits</a></li>
                    </ul>
                </li>
                <li > <a href="Avis.php"> <i class="fa fa-edit"></i> <span>Avis</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>

                </li>
                <li> <a href="Message.php"> <i class="fa fa-table"></i> <span>message</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>

                </li>
            </ul>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1 class="text-black">Categorie</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="sub-bread"><i class="fa fa-angle-right"></i> Pages</li>
                <li><i class="fa fa-angle-right"></i> Ajouter une Categorie</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline">
                        <div class="card-header bg-blue">
                            <h5 class="text-white m-b-0">Supprimer Categorie</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if($response){
                                if($response==="done"){
                                    ?>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess1">suppression avec success</label>
                                    </div>
                                    <?php
                                }else
                                    echo $response;
                            }
                            ?>
                            <form method="post" action="SupprimerCat.php">
                                <div class="form-group" class="col-lg-6">
                                    <label for="libelle"> Choisir la Categorie a supprimer </label>
                                    <select name="categorie" class="form-control">
                                        <?php
                                        foreach($donnee as $d ){
                                            ?>
                                            <option value="<?php echo $d['id']?>"><?php echo $d['libelle'] ?></option>
                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>


                                <input type="submit" name="submit" value="Supprimer" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="../assets/dist/js/jquery.min.js"></script>

        <!-- v4.0.0-alpha.6 -->
        <script src="../assets/dist/bootstrap/js/bootstrap.min.js"></script>

        <!-- template -->
        <script src="../assets/dist/js/niche.js"></script>
</body>

<!-- Mirrored from uxliner.com/niche/main/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 21:37:39 GMT -->
</html>