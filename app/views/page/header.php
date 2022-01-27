<div class="fixed-top">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <a class="navbar-brand" rel="nofollow" target="_blank" href="<?=BASE_URL . 'views'?>"
                style="text-transform: uppercase;"><img width="150px"
                    src="<?=CONTENT_URL . 'Images/template.png'?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="https://nusasatu.com">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://nusasatu.com">Post
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASE_URL.'login/dang-xuat' ?>">Đăng Xuât
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </nav>
    
    <section class="banner">
        <div class="nav-banner">
            <img src="<?= CONTENT_URL . 'Images/banner1.jpg'?>" id="banner" alt="">
        </div>
        <script>
        var arr = ['<?= CONTENT_URL . 'Images/banner1.jpg'?>', '<?= CONTENT_URL . 'Images/banner 2.jpg'?>',
            '<?= CONTENT_URL . 'Images/banner 3.jpg'?>'
        ]
        var index = 0;

        function slideshow() {
            document.getElementById('banner').src = arr[index]
            index++;
            if (index == arr.length) {
                index = 0;
            }
            setTimeout('slideshow()', 2000)
        }
        slideshow();
        </script>
    </section>