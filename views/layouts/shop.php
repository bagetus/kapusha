<html>
<head>
<link href="manage/popup_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/views/favic.ico" type="image/x-icon" />
<link href="views/lightbox.css" rel="stylesheet" />
<link href="views/style.css" rel="stylesheet" type="text/css" />
<link href="views/menustyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="views/flexslider.css" type="text/css" media="screen" />

<title>Интернет-магазин бас-гитар "Капуша"</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body style="background-image: url(images/bg.png);">
<div align="center">

<div class="maindiv" align="left">

<?php
include 'views/header.html';
?>

<?php
include 'views/hormenu.php';
?>


<div class="space"></div>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php');
?>

<?php
include 'views/footer.php';
?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <!--<script src="views/js/jquery-1.11.0.min.js"></script>-->
<!--    <script type="text/javascript" src="manage/jquery-1.2.6.min.js"></script>-->
    <script type="text/javascript" src="manage/custom.js"></script>
<!--    <script src="/views/js/lightbox.min.js"></script>-->
    <script src="/views/js/jquery.flexslider.js"></script>



    <script type="text/javascript">
//        $(function(){
//            SyntaxHighlighter.all();
//        });
//        $(window).load(function(){
//            $('.flexslider').flexslider({
//                animation: "slide",
//                start: function(slider){
//                    $('body').removeClass('loading');
//                }
//            });
//        });
    </script>

</div>
</div>
</body>
</html>

