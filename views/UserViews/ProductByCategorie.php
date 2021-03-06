<?php
require_once "../../Controllers/CategorieDAO.php";
require_once "../../Models/Produit.php";
require_once "../../Models/Categorie.php";
require_once "../../Controllers/ProduitDAO.php";
require_once ('../../utils/GetConnexion.php');
require_once ('../../Controllers/UserDao.php');
$catDao=new CategorieDAO();
if (isset($_POST["login"]))
{
    $user =$_POST["user"];
    $password =$_POST["password"];
    $userDao=new UserDao();
    $verif=$userDao->verifUser($user,$password);
    if($verif==true){
        session_start();
        $_SESSION['log'] = "logged in";
        header('Location: ../AdminViews/AjouterCat.php');
    }else
        $bool=true;

}
$donnee=$catDao->getAllCategorieController();
$prodDao=new ProduitDAO();
$id=$_GET['id'];
$produit=$prodDao->getAllProduitByCategorieController($id);
if (isset($_POST["login"]))
{
    $user =$_POST["user"];
    $password =$_POST["password"];
    $userDao=new UserDao();
    $verif=$userDao->verifUser($user,$password);
    if($verif==true){
        session_start();
        $_SESSION['log'] = "logged in";
        header('Location: ../AdminViews/AjouterCat.php');
    }else
        header('location: index.php');

}
?>
<!DOCTYPE HTML>
<html>


<!-- Mirrored from remtsoy.com/tf_templates/the_box/demo_v1_6/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 13:13:56 GMT -->
<head>
    <title>the box - Category</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">


    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/dist2/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/dist2/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/dist2/css/styles.css">
    <link rel="stylesheet" href="../assets/dist2/css/mystyles.css">
    <link rel="stylesheet" href="../assets/dist2/css/switcher.css" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/salem.css" title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/mandy.css" title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/green-smoke.css" title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/horizon.css" title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/cerise.css" title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/brick-red.css" title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/de-york.css" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/shamrock.css" title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/studio.css" title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/leather.css" title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/denim.css" title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../assets/dist2/css/schemes/scarlet.css" title="scarlet" media="all" />
</head>

<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="demo_changer" id="demo_changer">
        <div class="demo-icon fa fa-sliders"></div>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
        <h3 class="widget-title">Login</h3>

        <hr />
        <form method="post" action="ProductByCategorie.php">
            <div class="form-group">
                <label>pseudo</label>
                <input class="form-control" name="user" type="text" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="password" type="password" />
            </div>
            <input class="btn btn-primary" type="submit" name="login" value="Sign In" />
        </form>
        <div class="gap gap-small"></div>

    </div>
    <nav class="navbar navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img src="../assets/dist2/img/logo-w.png" alt="Image Alternative text" title="Image Title" />
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($donnee as $d){
                                ?>
                                <li><a href="ProductByCategorie.php?id=<?php echo $d['id'] ?>& libelle=<?php echo $d['libelle'] ?>"><?php echo $d['libelle'] ?></a>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                    </li>
                    <li><a href="ContactUs.php">&nbsp; Contact us<i class="drop-caret" data-toggle="dropdown"></i></a></li>
                    <li><a href="Opinion.php">&nbsp; Your opinion</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php echo $_GET['libelle'] ?></h1>
        </header>
        <div class="row">
            <div class="col-md-9">
                <div class="row" data-gutter="15">
                    <?php $i=0; ?>
                    <?php foreach ($produit as $p){
                    ?>
                    <div class="col-md-4">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img" src="../AdminViews/<?php echo $p->getImage(); ?>" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <a class="product-link" href="ProductDetail.php?id=<?php echo $p->getId(); ?>"></a>
                            <div class="product-caption">
                                <h5 class="product-caption-title"><?php echo $p->getLibelle(); ?></h5>
                                <div class="product-caption-price"><span class="product-caption-price-new"><?php echo $p->getPrix(); ?>dt</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li><?php echo $p->getQuantite() -5 ?></li>
                                    <li>Free Shipping</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                    $i=$i+1;
                    if($i==3){
                    ?>
                </div>
                <div class="row" data-gutter="15">
                    <?php
                    }
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="category-pagination-sign">58 items </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="gap"></div>

    <footer class="main-footer">
        <div class="container">
            <div class="row row-col-gap" data-gutter="60">
                <div class="col-md-3">
                    <h4 class="widget-title-sm">TheBox Shop</h4>
                    <p>The box is virtual market where you can find what ever you want in the computer science world</p>
                </div>

            </div>
            <ul class="main-footer-links-list">
                <li><a href="#">About Us</a>
                </li>
                <li><a href="#">Send Opinion</a>
                </li>
            </ul>
            <img class="main-footer-img" src="../assets/dist2/img/test_cat/5.png" alt="Image Alternative text" title="Image Title" />
        </div>
    </footer>
</div>
<script src="../assets/dist2/js/jquery.js"></script>
<script src="../assets/dist2/js/bootstrap.js"></script>
<script src="../assets/dist2/js/icheck.js"></script>
<script src="../assets/dist2/js/ionrangeslider.js"></script>
<script src="../assets/dist2/js/jqzoom.js"></script>
<script src="../assets/dist2/js/card-payment.js"></script>
<script src="../assets/dist2/js/owl-carousel.js"></script>
<script src="../assets/dist2/js/magnific.js"></script>
<script src="../assets/dist2/js/custom.js"></script>


<script src="../assets/dist2/js/switcher.js"></script>



</body>


<!-- Mirrored from remtsoy.com/tf_templates/the_box/demo_v1_6/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 13:13:58 GMT -->
</html>
