
<!-- Latest compiled and minified CSS -->



<?php
// if(!isset($_SESSION['user'])){
//     header ('location: '. BASE_URL . 'login/dang-nhap' );
//     die;
// }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Quản Trị</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CONTENT_URL . 'Css/style.css' ?>">
</head>

<body>
 

  <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5"
                    style="background-image: url(<?= CONTENT_URL . 'Images/template.png' ?>);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="<?= BASE_URL . 'mon-hoc' ?>" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Môn Học</a>
                    </li>
                    <li>
                    <a type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
            </nav>
        <style>
           body{
            font-family: "Poppins", Arial, sans-serif;
    font-size: 14px;
    line-height: 1.8;
    font-weight: normal;
    background: #ffffff;
    color: gray;
}
           
.item{
    /* display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr ; */
    display :flex;
    justify-content: space-evenly;
    overflow: auto;
    white-space: nowrap;
}   

.item .stay__item{
    /* overflow-x: auto; */
    min-width: 210px;
    }
 .item.stay__item{
    text-align: center;
}
h4,h2
{   
    color:#410d22;
    margin:15px;
    text-align: center;
}
        </style>
            
               

    <script src="<?= CONTENT_URL .'Js/jquery.min.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/popper.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/bootstrap.min.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/main.js' ?>"></script>
</body>

</html>