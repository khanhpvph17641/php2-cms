<?php
// if(!isset($_SESSION['user'])){
//     header ('location: '. BASE_URL . 'login/dang-nhap' );
//     die;
// }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CONTENT_URL . 'Css/style.css' ?>">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5"
                
                    style="background-image: url(<?= CONTENT_URL . 'Images/template.png' ?>);">
                
                </a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="<?= BASE_URL . 'mon-hoc' ?>" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Môn Học</a>
                        
                    </li>
                    <li>
                        <a href="<?= BASE_URL . 'quiz?logojectId=' ?>">Quiz</a>
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
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<table class="table">
    <thead>
        <th>Mã Logo</th>
        <th>Ảnh</th>
        <th>
            <a href="<?= BASE_URL . 'logo/tao-moi'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody >
             <?php foreach($logo as $logo): ?>
            <tr>
                <td><?= $logo->id ?></td>
                <td>
                <img width="120px" src="./Front-end/Images/<?=$logo->img?>" alt="">
                </td>
                <td>
                    <a href="<?= BASE_URL . 'logo/cap-nhat?id=' . $logo->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'logo/xoa?id=' . $logo->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>
               

    <script src="<?= CONTENT_URL .'Js/jquery.min.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/popper.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/bootstrap.min.js' ?>"></script>
    <script src="<?= CONTENT_URL .'Js/main.js' ?>"></script>
</body>

</html>