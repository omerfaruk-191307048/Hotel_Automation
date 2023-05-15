<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>OTELIO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
        href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
        <div
            class="spinner-border text-primary"
            style="width: 3rem; height: 3rem"
            role="status"
        >
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a
                    href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
                >
                    <h1 class="m-0 text-primary text-uppercase">OTELIO</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">info@otelio.com</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">+232 777 7218</p>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Otelio</h1>
                    </a>
                    <button
                        type="button"
                        class="navbar-toggler"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse justify-content-between"
                        id="navbarCollapse"
                    >
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active"
                            >Ana Sayfa</a
                            >
                            <a href="about.html" class="nav-item nav-link">Hakkımızda</a>
                            <a href="service.html" class="nav-item nav-link">SERVİSLER</a>
                            <a href="room.html" class="nav-item nav-link">Odalar</a>
                            <div class="nav-item dropdown">
                                <a
                                    href="#"
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                >SAYFALAR</a
                                >
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="booking.html" class="dropdown-item"
                                    >REZERVASYON</a
                                    >
                                    <a href="team.html" class="dropdown-item">EKİBİMİZ</a>
                                    <a href="testimonial.html" class="dropdown-item"
                                    >REFERANSLAR</a
                                    >
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">İLETİŞİM</a>
                        </div>
                        <a
                            href=""
                            class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block"
                        >OTELIO<i class="fa fa-arrow-right ms-3"></i
                            ></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div
            id="header-carousel"
            class="carousel slide"
            data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
                    <div
                        class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                    >
                        <div class="p-3" style="max-width: 700px">
                            <h6
                                class="section-title text-white text-uppercase mb-3 animated slideInDown"
                            >
                                Modern Yaşam
                            </h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">
                                Sınırsız Eğlencenin Keyfine Varın
                            </h1>
                            <a
                                href=""
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                            >Odalarımız</a
                            >
                            <a
                                href=""
                                class="btn btn-light py-md-3 px-md-5 animated slideInRight"
                            >Oda Rezervasyonu</a
                            >
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
                    <div
                        class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                    >
                        <div class="p-3" style="max-width: 700px">
                            <h6
                                class="section-title text-white text-uppercase mb-3 animated slideInDown"
                            >
                                Modern Yaşam
                            </h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">
                                Huzurun Tadını Çıkarın
                            </h1>
                            <a
                                href=""
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                            >Odalarımız</a
                            >
                            <a
                                href=""
                                class="btn btn-light py-md-3 px-md-5 animated slideInRight"
                            >Oda Rezervasyonu</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Booking Start -->
    <div
        class="container-fluid booking pb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input
                                        type="text"
                                        class="form-control datetimepicker-input"
                                        placeholder="Check in"
                                        data-target="#date1"
                                        data-toggle="datetimepicker"
                                    />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input
                                        type="text"
                                        class="form-control datetimepicker-input"
                                        placeholder="Check out"
                                        data-target="#date2"
                                        data-toggle="datetimepicker"
                                    />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Yetişkin</option>
                                    <option value="1">1 Yetişkin</option>
                                    <option value="2">2 Yetişkin</option>
                                    <option value="3">3 Yetişkin</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Çocuk</option>
                                    <option value="1">1 Çocuk</option>
                                    <option value="2">2 Çocuk</option>
                                    <option value="3">3 Çocuk</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Gönder</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">
                        Hakkımızda
                    </h6>
                    <h1 class="mb-4">
                        <span class="text-primary text-uppercase">Otelio'ya</span>
                        HOŞ GELDİNİZ
                    </h1>
                    <p class="mb-4">
                        Otelio'ya ve modern yaşama hoş geldiniz. Birbirinden lüks 50
                        odamız, canayakın personellerimiz ve 10.000'den fazla memnun
                        konuklarımızla, sizleri ağırlamaktan keyif duyarız.
                    </p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">50</h2>
                                    <p class="mb-0">Odalar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">200</h2>
                                    <p class="mb-0">Personel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1">10K+</h2>
                                    <p class="mb-0">Konuklar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">KEŞFET</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img
                                class="img-fluid rounded w-75 wow zoomIn"
                                data-wow-delay="0.1s"
                                src="img/about-1.jpg"
                                style="margin-top: 25%"
                            />
                        </div>
                        <div class="col-6 text-start">
                            <img
                                class="img-fluid rounded w-100 wow zoomIn"
                                data-wow-delay="0.3s"
                                src="img/about-2.jpg"
                            />
                        </div>
                        <div class="col-6 text-end">
                            <img
                                class="img-fluid rounded w-50 wow zoomIn"
                                data-wow-delay="0.5s"
                                src="img/about-3.jpg"
                            />
                        </div>
                        <div class="col-6 text-start">
                            <img
                                class="img-fluid rounded w-75 wow zoomIn"
                                data-wow-delay="0.7s"
                                src="img/about-4.jpg"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">
                    Odalarımız
                </h6>
                <h1 class="mb-5">
                    <span class="text-primary text-uppercase">Odalarımızı</span>
                    KEŞFEDİN
                </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-1.jpg" alt="" />
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                            >1000₺ / Gece</small
                            >
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Premium</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bed text-primary me-2"></i>2 Yatak</small
                                >
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bath text-primary me-2"></i>1
                                    Banyo</small
                                >
                                <small
                                ><i class="fa fa-wifi text-primary me-2"></i>Wi-Fi</small
                                >
                            </div>
                            <p class="text-body mb-3">
                                Premium oda seçeneğimiz ile herkese uygun olan otel
                                deneyiminin hazzını yaşayın.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                                >Detayları Gör</a
                                >
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href=""
                                >Rezervasyon</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-2.jpg" alt="" />
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                            >2000₺ / Gece</small
                            >
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Elegance</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bed text-primary me-2"></i>3 Yatak</small
                                >
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bath text-primary me-2"></i>2
                                    Banyo</small
                                >
                                <small
                                ><i class="fa fa-wifi text-primary me-2"></i>Wi-Fi</small
                                >
                            </div>
                            <p class="text-body mb-3">
                                Elegance oda seçeneğinde, ihtiyacınız olan her şeye sahip
                                olup huzurun tadını sonuna kadar çıkarabilirsiniz.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                                >Detayları Gör</a
                                >
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href=""
                                >Rezervasyon</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-3.jpg" alt="" />
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                            >3000₺ / Gece</small
                            >
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Super Deluxe</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bed text-primary me-2"></i>5 Yatak</small
                                >
                                <small class="border-end me-3 pe-3"
                                ><i class="fa fa-bath text-primary me-2"></i>2
                                    Banyo</small
                                >
                                <small
                                ><i class="fa fa-wifi text-primary me-2"></i>Wi-Fi</small
                                >
                            </div>
                            <p class="text-body mb-3">
                                Super Deluxe, sizlere ihtiyacınızdan çok daha fazlasını
                                sunar. Unutulmaz bir otel deneyimi isteyenlere.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                                >Detayları Gör</a
                                >
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href=""
                                >Rezervasyon</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->

    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6
                        class="section-title text-start text-white text-uppercase mb-3"
                    >
                        Modern Yaşam
                    </h6>
                    <h1 class="text-white mb-4">Lüks Otel Deneyimi Yaşayın</h1>
                    <p class="text-white mb-4">
                        İzmir'in en sakin ve huzurlu kasabasında tatilin tadını
                        çıkarmanız için sizleri ağırlamayı çok isteriz. Rezersvasyon
                        için aşağıdaki linkleri inceleyebilirsiniz.
                    </p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3"
                    >Odalarımız</a
                    >
                    <a href="" class="btn btn-light py-md-3 px-md-5"
                    >Oda Rezervasyonu</a
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button
                        type="button"
                        class="btn-play"
                        data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                        data-bs-target="#videoModal"
                    >
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe
                            class="embed-responsive-item"
                            src=""
                            id="video"
                            allowfullscreen
                            allowscriptaccess="always"
                            allow="autoplay"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">
                    SERVİSLERİMİZ
                </h6>
                <h1 class="mb-5">
                    <span class="text-primary text-uppercase">HİZMETLERİMİZİ</span>
                    KEŞFEDİN
                </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Odalarımız</h5>
                        <p class="text-body mb-0">
                            Yatak sayısına göre 2, 3 veya 5 yataklı odalarımızdan
                            dilediğinizi tercih edebilirsiniz.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Yemek & Restaurant</h5>
                        <p class="text-body mb-0">
                            Otelimizin restaurantı Türkiye'nin en seçkinleri arasında yer
                            almaktadır.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-spa fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Spa & Fitness</h5>
                        <p class="text-body mb-0">
                            Otelimizin Spa ve Fitness salonu imkanlarından ücretsiz
                            şekilde yararlanabilirsiniz.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Spor & Oyun</h5>
                        <p class="text-body mb-0">
                            Tenis kortu, basketbol sahası, yüzme havuzu veya konsol
                            oyunları salonumuzda dilediğiniz gibi keyifli vakit geçirin.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Etkinlik & Parti</h5>
                        <p class="text-body mb-0">
                            Bizimleyken düzenlediğimiz organizasyonlarla canınınz hiç
                            sıkılmayacak.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div
                                class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"
                            >
                                <i class="fa fa-dumbbell fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Yoga</h5>
                        <p class="text-body mb-0">
                            Eğitmenlerimizle beraber her sabah gerçekleştirdiğimiz yoga
                            seanslarımıza katılabilirsiniz.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div
        class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn"
        data-wow-delay="0.1s"
    >
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div
                    class="testimonial-item position-relative bg-white rounded overflow-hidden"
                >
                    <p>
                        Ailemle birlikte 1 haftalığına Otelo'da konaklama maceramızdan
                        çok memnun kaldık. En kısa sürede tekrar uğramayı planlıyoruz.
                        10/10
                    </p>
                    <div class="d-flex align-items-center">
                        <img
                            class="img-fluid flex-shrink-0 rounded"
                            src="img/testimonial-1.jpg"
                            style="width: 45px; height: 45px"
                        />
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Ayşe Yılmaz</h6>
                            <small>Muhasebeci</small>
                        </div>
                    </div>
                    <i
                        class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"
                    ></i>
                </div>
                <div
                    class="testimonial-item position-relative bg-white rounded overflow-hidden"
                >
                    <p>
                        Öncesinde araştırma yapıp geldiğim Otelio'dan çok memnun kaldık.
                        Personeller ve imkanlar genel olarak çok iyiydi, umarım tekrar
                        görüşürüz. 10/10
                    </p>
                    <div class="d-flex align-items-center">
                        <img
                            class="img-fluid flex-shrink-0 rounded"
                            src="img/testimonial-2.jpg"
                            style="width: 45px; height: 45px"
                        />
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Mustafa Türkmen</h6>
                            <small>Web Geliştirici</small>
                        </div>
                    </div>
                    <i
                        class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"
                    ></i>
                </div>
                <div
                    class="testimonial-item position-relative bg-white rounded overflow-hidden"
                >
                    <p>
                        İş seyahati sayesinde tanıştığım Otelio bütün ihtiyaçlarımı
                        karşıladı. Bir otelden daha fazlası, herkese tavsiye ediyorum.
                        10/10
                    </p>
                    <div class="d-flex align-items-center">
                        <img
                            class="img-fluid flex-shrink-0 rounded"
                            src="img/testimonial-3.jpg"
                            style="width: 45px; height: 45px"
                        />
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Mehmet Soydan</h6>
                            <small>CEO</small>
                        </div>
                    </div>
                    <i
                        class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"
                    ></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">
                    EKİBİMİZ
                </h6>
                <h1 class="mb-5">
                    <span class="text-primary text-uppercase">TAKIMIMIZI</span>
                    KEŞFEDİN
                </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="" />
                            <div
                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                            >
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Faruk Yosun</h5>
                            <small>Personel Müdürü</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="" />
                            <div
                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                            >
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Fatih Sarı</h5>
                            <small>Yiyecek & İçecek Departmanı</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="" />
                            <div
                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                            >
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Kaan Kırbaş</h5>
                            <small>Resepsiyon Departmanı</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="rounded shadow overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="" />
                            <div
                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                            >
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-facebook-f"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-twitter"></i
                                    ></a>
                                <a class="btn btn-square btn-primary mx-1" href=""
                                ><i class="fab fa-instagram"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Kemal Özden</h5>
                            <small>Teknik Servis Departmanı</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">
                            <span class="text-primary text-uppercase">BÜLTENİMİZE</span>
                            ABONE OLUN
                        </h4>
                        <div class="position-relative mx-auto" style="max-width: 400px">
                            <input
                                class="form-control w-100 py-3 ps-4 pe-5"
                                type="text"
                                placeholder="Mail adresinizi giriniz"
                            />
                            <button
                                type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2"
                            >
                                Gönder
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->

    <!-- Footer Start -->
    <div
        class="container-fluid bg-dark text-light footer wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="index.html"
                        ><h1 class="text-white text-uppercase mb-3">Otelio</h1></a
                        >
                        <p class="text-white mb-0">
                            İzmir'de huzurun adresi
                            <a class="text-dark fw-medium" href="">Otelio</a> ile otel
                            deneyimlerinizi en üst seviyeye çıkarabilirsiniz.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6
                        class="section-title text-start text-primary text-uppercase mb-4"
                    >
                        İLETİŞİM
                    </h6>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>16 Eylül, 3264 Sok
                        No:16, Çeşme / İzmir
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+232 777 7218
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>info@otelio.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""
                        ><i class="fab fa-twitter"></i
                            ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                        ><i class="fab fa-facebook-f"></i
                            ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                        ><i class="fab fa-youtube"></i
                            ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                        ><i class="fab fa-linkedin-in"></i
                            ></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6
                                class="section-title text-start text-primary text-uppercase mb-4"
                            >
                                KURUMSAL
                            </h6>
                            <a class="btn btn-link" href="">Hakkımızda</a>
                            <a class="btn btn-link" href="">İletişim</a>
                            <a class="btn btn-link" href="">Gizlilik Politikası</a>
                            <a class="btn btn-link" href="">Şartlar ve Koşullar</a>
                            <a class="btn btn-link" href="">Destek</a>
                        </div>
                        <div class="col-md-6">
                            <h6
                                class="section-title text-start text-primary text-uppercase mb-4"
                            >
                                SERVİSLER
                            </h6>
                            <a class="btn btn-link" href="">Yemek & Restaurant</a>
                            <a class="btn btn-link" href="">Spa & Fitness</a>
                            <a class="btn btn-link" href="">Spor & Oyun</a>
                            <a class="btn btn-link" href="">Etkinlik & Parti</a>
                            <a class="btn btn-link" href="">Yoga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Otelio</a>, Tüm Hakları
                        Saklıdır. Otelio Tarafından Tasarlandı.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Ana Sayfa</a>
                            <a href="">Çerezler</a>
                            <a href="">Yardım</a>
                            <a href="">S.S.S</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
    ><i class="bi bi-arrow-up"></i
        ></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
