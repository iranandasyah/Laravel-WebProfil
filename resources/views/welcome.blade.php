<!DOCTYPE html>
<!-- Created By Vira -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profileku</title>

    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Profile<span>Ku.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Activity</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Haii, It's me</div>
                <div class="text-2">Ira Nandasyah Wulan</div>
                <div class="text-3">My web Personal Profile <span class="typing"></span></div>
                <a href="#">More</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/aku.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Me - <span class="typing-2"></span></div>
                    <p>Saya seorang muslim, kota kelahiran saya ialah di Surabaya dan saat ini sedang menempuh di perguruan tinggi UNESA, semenjak pandemi yang menyebabkan terjadinya kuliah secara online atau daring menjadikan saya sering dirumah saja. Meskipun begitu saya tetap semangat untuk menjalani hari-hari yang akan datang</p>
                    <a href="#">More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Activity</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-layer-group"></i>
                        <div class="text">Mengaji</div>
                        <p>Mengaji dengan lantunan membuat saya tenang, setiap hari saya lakukan setelah beribadah </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-book-open"></i>
                        <div class="text">Membaca</div>
                        <p>Saya senang membaca buku2 non fiksi</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-marker"></i>
                        <div class="text">Menulis </div>
                        <p>Kegiatan terakhir yg merupakan favorit bagi saya ialah menulis cerita pendek dan juga diary</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Contact me</div>
                    <p>Dapat menghubungi saya dengan</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Ira Nandasyah</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">wulaan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">wulan@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.profilekuu.com">Profileku</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="{{ url('script.js') }}"></script>
</body>
</html>
