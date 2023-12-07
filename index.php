<?php
session_start();

if (!isset($_SESSION['lan'])) {
    $_SESSION['lan'] = 'CN';
}
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Acheive Bunker</title>
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/new/favn.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons/font-css.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <link rel="stylesheet" href="assets/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/nice-select.css"/>
    <link rel="stylesheet" href="assets/css/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/css/metisMenu.css"/>
    <link rel="stylesheet" href="assets/css/aos.css"/>
    <link rel="stylesheet" href="assets/css/spacing.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Lato&family=Poppins:wght@300&display=swap"
          rel="stylesheet">
    <style>
        .dropdown-item {
            padding: 20px 10px;
        }

        .ab-country p{
            font-size: 17px;
            font-weight: 800;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
<!-- main-page-wrapper start -->
<div class="main-page-wrapper">

    <!-- Add your site or application content here -->

    <!-- offcanvas start  -->
    <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
        <div class="offcanvas-header">
            <a data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fas fa-times search-close" id="search-close"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <form method="get">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </form>
            </div>
            <!-- end fullscreen search -->
        </div>
    </div>
    <!-- offcanvas end  -->

    <!-- header-area start -->
    <header class="fixed-top">
        <div class="top__header__section bg-white">
            <div class="container custom-container-header pt-3 pb-2">
                <div class="row desktop ">
                    <div class="col-lg-12  ">
                        <h6 class="info-desc text-black text-lg-end "><i class="fa-regular fa-envelope me-1"></i>
                            sales@achievebunker.com <i class="fa-solid fa-phone me-1 ms-2 ms-sm-10"> </i> +852 3996 9455
                            / +852 6220 9634</h6>
                    </div>
                </div>
                <div class="row mobile">
                    <div class="col-sm-6  ">
                        <h6 class="info-desc text-black text-lg-end text-center"><i
                                    class="fa-regular fa-envelope me-1"></i> sales@achievebunker.com</h6>
                    </div>
                    <div class="col-sm-6  ">
                        <h6 class="info-desc text-black text-lg-end text-center"><i
                                    class="fa-solid fa-phone me-1 ms-2 ms-sm-10"></i> +852 3996 9455 / +852 6220 9634
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/new/logo.png" alt="Header-logo"
                                                              style="max-width:160px "></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" id="navToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5" style="font-weight: bolder">
                        <li class="nav-item">
                            <a class="nav-link" href="#Home"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '主頁';  elseif ($_SESSION['lan'] == 'CS')
                                    echo '主页'; else echo 'Home' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#About"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '關於我們'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '关于我们'; else echo 'About Us' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Services"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '服務介紹'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '服务介绍'; else echo 'Services' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Products"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '產品簡介'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '产品简介'; else echo 'Products' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Coverage"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '覆蓋範圍'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '复盖范围'; else echo 'Coverage' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Download"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '下載中心'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '下载中心'; else echo 'Downloads' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact"
                               onclick="closeNavbar()"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們 '; elseif ($_SESSION['lan'] == 'CS')
                                    echo '联繫我们'; else echo 'Contact Us' ?></a>
                        </li>
                        <li class="nav-item dropdown" style="top: -10px">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false"><?php if ($_SESSION['lan'] == 'CN') echo '語言 '; elseif ($_SESSION['lan'] == 'CS')
                                    echo '语言'; else echo 'Language' ?>
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="include/lan.php?lan=EN">English</a></li>
                                <li><a class="dropdown-item" href="include/lan.php?lan=CN">繁體</a></li>
                                <li><a class="dropdown-item" href="include/lan.php?lan=CS">简体</a></li>
                            </ul>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </header>
    <!-- header-area end -->

    <main>
        <!-- theme__main__banner start -->
        <section class="theme__main__banner" id="Home">
            <div class="swiper hero__slider__one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main__banner__bg pt-290 pb-220 pb-lg-200 pt-md-200 pb-md-150"
                             data-background="assets/img/new/HERO-B.png"
                             style="background-image: url('assets/img/new/HERO-B.png');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="theme__content text-xl-start text-center  mb-5  mb-lg-0">
                                            <h1 class="banner__main__title mb-20 fs-2 text-white"> <?php if ($_SESSION['lan'] == 'CN') echo '以信為本  承諾  推動成就！'; elseif ($_SESSION['lan'] == 'CS')
                                                    echo '以信为本  承诺  推动成就！'; else echo 'Commitment Drives Achievement!' ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- theme__main__banner end -->

        <!-- offer__section start -->
        <section class="grey-bg offer__section" id="About">
            <div class="offer__bg__wrapper pt-50 pt-lg-50 pb-60 pb-lg-30"
                 data-background="assets/img/shape/vector-1.svg">
                <div class="container">
                    <div class="row ">
                        <h1 class="banner__main__title mb-20 fs-2 "> <?php if ($_SESSION['lan'] == 'CN') echo '關於我們'; elseif ($_SESSION['lan'] == 'CS')
                                echo '关于我们'; else echo 'About Us' ?></h1>
                    </div>
                    <p style="text-align: justify"><?php if ($_SESSION['lan'] == 'CN') echo '歡迎來到傳成燃油————您值得信賴的船用燃料供應商。我們致力於提供持續優質可靠的船舶燃料產品，以滿足海運業不斷變化的需求。憑藉對品質、效率和環境管理的堅定承諾，我們以成為船舶燃油供應行業的領導者作為公司的目標。 
在傳成燃油，我們了解燃料在船舶和全球航運業平穩運作中發揮著關鍵的作用。 我們的專業團隊擁有豐富的經驗和專業知識，以確保我們的客戶獲得最可靠周全的服務和燃料產品'; elseif ($_SESSION['lan'] == 'CS')
                            echo '欢迎来到传成燃油————您值得信赖的船用燃料供应商。我们致力于提供持续优质可靠的船舶燃料产品，以满足海运业不断变化的需求。凭藉对品质、效率和环境管理的坚定承诺，我们以成为船舶燃油供应行业的领导者作为公司的目标。 
在传成燃油，我们了解燃料在船舶和全球航运业平稳运作中发挥着关键的作用。 我们的专业团队拥有丰富的经验和专业知识，以确保我们的客户获得最可靠周全的服务和燃料产品';   else echo 'Welcome to Achieve Bunker, your trusted partner in marine fuel
                        solutions. We are dedicated to providing reliable and sustainable fuel products to meet the
                        evolving needs of the maritime industry. With a strong commitment to quality, efficiency, and
                        environmental stewardship, we aim to become a leading player in the bunkering sector.
                        At Achieve Bunker, we understand the critical role that fuel plays in the smooth operation of
                        vessels and the global shipping industry. Our team of industry experts brings a wealth of
                        experience and expertise to ensure that our customers receive the highest standards of service
                        and fuel products.' ?>
                    </p>
                    <div class="row gx-lg-0 align-items-center mt-5">
                        <div class="col-lg-3 col-md-6">
                            <div class=" mb-30 text-center">
                                <div class="icon mb-20 text-center">
                                    <img class="icon-back img-fluid" src="assets/img/new/Quality-products.png"
                                         alt="icon" style="height: 120px ; width: 120px">

                                </div>
                                <p><?php if ($_SESSION['lan'] == 'CN') echo '符合國際標準的產品'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '符合国际标准的产品'; else echo ' Quality products' ?> </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class=" mb-30  text-center">
                                <div class="icon mb-20 ">
                                    <img class="icon-back img-fluid" src="assets/img/new/Competitive-fuel-pricing.png"
                                         alt="icon" style="height: 120px ; width: 120px">
                                </div>
                                <p> <?php if ($_SESSION['lan'] == 'CN') echo '具競爭力的價格'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '具竞争力的价格'; else echo ' Competitive fuel pricing' ?> </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class=" mb-30 text-center">
                                <div class="icon mb-20">
                                    <img class="icon-back img-fluid" src="assets/img/new/Worldwide-ports-coverage.png"
                                         alt="icon" style="height: 120px ; width: 120px">
                                </div>
                                <p> <?php if ($_SESSION['lan'] == 'CN') echo '全球港口的覆蓋'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '全球港口的复盖'; else echo 'Worldwide ports coverage' ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class=" mb-30 text-center">
                                <div class="icon mb-20">
                                    <img class="icon-back img-fluid"
                                         src="assets/img/new/Comprehensive-Risk-Management.png"
                                         alt="icon" style="height: 120px ; width: 120px">
                                </div>
                                <p> <?php if ($_SESSION['lan'] == 'CN') echo '全面的風險管理 ';  elseif ($_SESSION['lan'] == 'CS')
                                        echo '全面的风险管理'; else echo 'Comprehensive Risk Management' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer__section end -->

        <section id="Services">
            <div class="swiper hero__slider__one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main__banner__bg pt-50 pb-50 pb-lg-50 pt-md-50 pb-md-50"
                             data-background="assets/img/new/efr.png"
                             style="padding-bottom: 50px; padding-top: 50px;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-7 col-lg-12">
                                        <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h1 class="banner__main__title mb-20  fs-2 mt-3"> <?php if ($_SESSION['lan'] == 'CN') echo '服務介紹 ';  elseif ($_SESSION['lan'] == 'CS')
                                                    echo '服务介绍'; else echo 'Services' ?></h1>
                                            <p class="text-white "
                                               style="text-align: justify ; font-weight: 500"><?php if ($_SESSION['lan'] == 'CN') echo '在傳成燃油，我們為以客戶為中心的方針感到自豪。 我們致力於提供誠信弄可靠、具透明度的服務，因而能夠與客戶建立長期合作關係。 我們對客戶履行令人滿意的承諾，亦會不斷努力以超越期望，並提供卓越的服務。 
我們深知每個客戶都是獨一無二的，客戶的燃料需求可能各有不同。 因此，我們提供個人化的解決方案和靈活的服務，以確保我們的客戶在正確的時間獲得合適的供應，以順利完成每一個航次。 
我們的專業團隊與客戶密切合作，了解他們的特定需求，優化他們的燃油採購，並提供高效的供應鏈管理。 請立即聯絡我們，以了解我們的產品、服務以及我們如何滿足您的加油需求。 讓我們共同邁向更綠色、更有效率的海運業。'; elseif ($_SESSION['lan'] == 'CS')
                                                    echo '在传成燃油，我们为以客户为中心的方针感到自豪。 我们致力于提供诚信弄可靠、具透明度的服务，因而能够与客户建立长期合作关係。 我们对客户履行令人满意的承诺，亦会不断努力以超越期望，并提供卓越的服务。 
我们深知每个客户都是独一无二的，客户的燃料需求可能各有不同。 因此，我们提供个人化的解决方案和灵活的服务，以确保我们的客户在正确的时间获得合适的供应，以顺利完成每一个航次。 
我们的专业团队与客户密切合作，了解他们的特定需求，优化他们的燃油採购，并提供高效的供应链管理。 请立即联络我们，以了解我们的产品、服务以及我们如何满足您的加油需求。 让我们共同迈向更绿色、更有效率的海运业。'; else echo 'At
                                                Achieve
                                                Bunker,
                                                we
                                                pride ourselves on our
                                                customer-centric approach. We strive to build
                                                long-term relationships with our clients based on trust, reliability,
                                                and transparency.
                                                Our
                                                commitment to customer satisfaction means that we go the extra mile to
                                                exceed
                                                expectations and
                                                deliver exceptional service at all times.
                                                We understand that each customer is unique, and their fuel requirements
                                                may vary.
                                                Therefore, we
                                                provide personalized solutions and flexible services to ensure that our
                                                clients receive
                                                the
                                                right fuel at the right time. Our dedicated team works closely with
                                                customers to
                                                understand
                                                their specific needs, optimize their fuel consumption, and provide
                                                efficient supply
                                                chain
                                                management.
                                                Contact us today to learn more about our products, services, and how we
                                                can meet your
                                                bunkering
                                                needs. Together, let \'s navigate towards a greener and more efficient
                                                maritime
                                                industry.' ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="Products">
            <div class="swiper hero__slider__one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main__banner__bg"
                             data-background="assets/img/new/egr.png">
                            <div class="container">
                                <h1 class="banner__main__title mb-3 fs-2 pt-5"> <?php if ($_SESSION['lan'] == 'CN') echo '產品簡介 '; elseif ($_SESSION['lan'] == 'CS')
                                        echo '产品简介'; else echo 'Products' ?></h1>
                                <p class="fs-6 mb-5"
                                   style="text-align: justify"><?php if ($_SESSION['lan'] == 'CN') echo '我們的產品組合包括全面的船用燃料油和潤滑油，可滿足不同船舶和航運公司的需求。  '; elseif ($_SESSION['lan'] == 'CS')
                                        echo '我们的产品组合包括全面的船用燃料油和润滑油，可满足不同船舶和航运公司的需求。'; else echo 'Our product portfolio includes a comprehensive range of marine fuels to meet the
                                    diverse requirements of different vessels and shipping companies.' ?></p>
                                <div class="row align-items-center">
                                    <div class="mb-3 col-lg-3">
                                        <div class="card" style="height: <?php if ($_SESSION['lan'] == 'CN') echo '300px'; else echo '350px'; ?>;">
                                            <div class="card-body">
                                                <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                                                    <h1 class="banner__main__title mb-20 mt-3 fs-5">
                                                        <?php if ($_SESSION['lan'] == 'CN')
                                                            echo '低硫燃油（LSFO、RME180CST/RMG380CST）：';
                                                        else if ($_SESSION['lan'] == 'CS')
                                                            echo '低硫燃油（LSFO、RME180CST/RMG380CST）：';
                                                        else
                                                            echo 'Low Sulphur Fuel Oil (LSFO,RME180CST/RMG380CST):' ?></h1>
                                                    <p class="" style="text-align: justify">
                                                        <small>
                                                            <?php
                                                            if ($_SESSION['lan'] == 'CN')
                                                                echo '這是加油駁船主要供應的產品。 它是各類船舶用作推進和發電能源的燃油。  ';
                                                            else if ($_SESSION['lan'] == 'CS')
                                                                echo '这是加油驳船主要供应的产品。 它是各类船舶用作推进和发电能源的燃油。';
                                                            else
                                                                echo 'This is the primary
                                                                product supplied by bunker barge. It is a heavy fuel oil used by
                                                                ships
                                                                and other marine vessels as a source of energy for propulsion
                                                                and power
                                                                generation.';
                                                        ?>
                                                        </small></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <div class="card" style="height: <?php if ($_SESSION['lan'] == 'CN') echo '300px'; else echo '350px'; ?>;">
                                            <div class="card-body">
                                                <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                                                    <h1 class="banner__main__title mb-20 mt-3 fs-5"> <?php
                                                        if ($_SESSION['lan'] == 'CN')
                                                            echo '低硫船用輕柴油（LSMGO，歐盟 V 柴油）： ';
                                                        else if ($_SESSION['lan'] == 'CS')
                                                            echo '低硫船用轻柴油（LSMGO，欧盟 V 柴油）： ';
                                                        else
                                                            echo 'Low Sulphur Marine Gas Oil (LSMGO, Euro V Diesel):' ?></h1>
                                                    <p class="" style="text-align: justify">
                                                        <small><br> <?php
                                                            if ($_SESSION['lan'] == 'CN')
                                                                echo '柴油是比燃油更乾淨的替代品。 它的硫含量較低，適用於需要更高品質燃料的船舶，例如在排放控制區域運作的船舶或具有更嚴格環境法規的船舶。';
                                                            else if ($_SESSION['lan'] == 'CS')
                                                                echo '柴油是比燃油更乾淨的替代品。 它的硫含量较低，适用于需要更高品质燃料的船舶，例如在排放控制区域运作的船舶或具有更严格环境法规的船舶。';
                                                            else
                                                                echo 'MGO is a lighter
                                                                    and
                                                                    cleaner alternative to MFO. It has lower sulphur content and is
                                                                    used by
                                                                    ships that require a higher-quality fuel, such as those
                                                                    operating in
                                                                    emission-controlled areas or vessels with stricter environmental
                                                                    regulations. '; ?>
                                                        </small></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <div class="card" style="height: <?php if ($_SESSION['lan'] == 'CN') echo '300px'; else echo '350px'; ?>;">
                                            <div class="card-body">
                                                <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                                                    <h1 class="banner__main__title mb-20 mt-3 fs-5"> <?php if ($_SESSION['lan'] == 'CN') echo 'HSFO（高硫燃油） '; elseif ($_SESSION['lan'] == 'CS')
                                                            echo 'HSFO（高硫燃油）'; else echo 'HSFO (High-Sulphur Fuel Oil)' ?></h1>
                                                    <p class="" style="text-align: justify"><small><br><?php
                                                            if ($_SESSION['lan'] == 'CN')
                                                                echo '是一種含硫量較高的燃油。 歷史上，HSFO 常被用作各種類型船舶的燃料，
                                                                特別是大型遠洋船舶。 然而，由於旨在減少硫排放的環境法規，
                                                                近年來HSFO的使用受到了顯著限制。 配備脫硫裝置的船舶仍可使用 HSFO。';
                                                            elseif ($_SESSION['lan'] == 'CS')
                                                                echo '是一种含硫量较高的燃油。 历史上，HSFO 常被用作各种类型船舶的燃料，
                                                                特别是大型远洋船舶。 然而，由于旨在减少硫排放的环境法规，
                                                                近年来HSFO的使用受到了显着限制。 配备脱硫装置的船舶仍可使用 HSFO。';
                                                            else
                                                                echo 'HSFO (High-Sulphur Fuel Oil) is a type of fuel oil 
                                                                that contains  high sulphur content. Historically, HSFO 
                                                                was commonly used as a fuel in various types of marine 
                                                                vessels, particularly large ocean-going ships. Vessels 
                                                                equipped with scrubbers may still utilize HSFO.' ?>
                                                        </small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <div class="card" style="height: <?php if ($_SESSION['lan'] == 'CN') echo '300px'; else echo '350px'; ?>;">
                                            <div class="card-body">
                                                <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                                                    <h1 class="banner__main__title mb-20 mt-3 fs-5"> <?php if ($_SESSION['lan'] == 'CN') echo '潤滑油（汽缸油、系統油、發電機油等）：'; elseif ($_SESSION['lan'] == 'CS')
                                                            echo '润滑油（汽缸油、系统油、发电机油等）：'; else echo 'Lubricants (Cylinder Oil, System Oil, Generator Oil…etc):' ?></h1>
                                                    <p class="" style="text-align: justify">
                                                        <small> <?php if ($_SESSION['lan'] == 'CN') echo '我們提供一系列專為船舶應用設計的潤滑油。 這些潤滑劑有助於減少船舶引擎和機械的摩擦和磨損，確保平穩運作並延長關鍵零件的使用壽命。'; elseif ($_SESSION['lan'] == 'CS')
                                                                echo '我们提供一系列专为船舶应用设计的润滑油。 这些润滑剂有助于减少船舶引擎和机械的摩擦和磨损，确保平稳运作并延长关键零件的使用寿命。'; else echo ' We offer a range of
                                                        lubricants specifically designed for marine applications. These
                                                        lubricants help reduce friction and wear in ship engines and
                                                        machinery,
                                                        ensuring smooth operation and extending the lifespan of critical
                                                        components. ' ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Coverage">
            <div class="container mb-5">
                <div class="row ">
                    <div class="col-lg-3 col-sm-12">
                        <div class="theme__content ab-country text-xl-start mb-5 mb-lg-0">
                            <h1 class="banner__main__title mb-20 mt-5 fs-2"> <?php if ($_SESSION['lan'] == 'CN') echo '覆蓋範圍';  elseif ($_SESSION['lan'] == 'CS')
                                    echo '复盖范围'; else echo 'Coverage' ?></h1>
                            <p class=""
                               style="text-align: justify"> <?php if ($_SESSION['lan'] == 'CN') echo '主要加油港：'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '主要加油港：'; else echo 'Major Bunker Ports:' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 香港'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 香港'; else echo '* Hong Kong' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 新加坡'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 新加坡'; else echo '* Singapore' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 上海'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 上海'; else echo '* Shanghai' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 舟山';  elseif ($_SESSION['lan'] == 'CS')
                                    echo ' * 舟山';else echo '* Zhoushan' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 釜山'; elseif ($_SESSION['lan'] == 'CS')
                                    echo ' * 釜山'; else echo '* Busan' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 東京'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 东京'; else echo '* Tokyo' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 高雄'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 高雄'; else echo '* Kaohsiung' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 曼谷'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 曼谷'; else echo '* Bangkok' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 胡志明市'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 胡志明市'; else echo '* Ho Chi Minh City' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 馬尼拉'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 马尼拉'; else echo '* Manila' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 雅加達'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 雅加达'; else echo '* Jakarta' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 巴拿馬'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 巴拿马'; else echo '* Panama' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 休士頓'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 休士顿'; else echo '* Houston' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 鹿特丹'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 鹿特丹'; else echo '* Rotterdam' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 直布羅陀'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 直布罗陀'; else echo '* Gibraltar' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 馬耳他'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 马耳他'; else echo '* Malta' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 塞得港'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 塞得港'; else echo '* Port Said' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 富吉拉'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 富吉拉'; else echo '* Fujairah' ?></p>
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '* 法坎港…等等'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '* 法坎港…等等'; else echo '* Khor Fakkan' ?></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <video width="100%" autoplay muted loop>
                            <source src="assets/map.mp4" type="video/mp4">
                            <source src="assets/map.mp4" type="video/ogg">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
        </section>


        <section
                style="background: url('assets/img/new/DFF.png') ; background-size: cover  ;height: 100%; padding-bottom: 25px" id="Download">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme__content text-xl-start mb-5 mt-5 mb-lg-0">
                            <h1 class="banner__main__title mb-20 mt-3 fs-2"> <?php if ($_SESSION['lan'] == 'CN') echo '公司簡介'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '公司简介'; else echo 'Company Introduction ' ?></h1>
                            <p class="text-white"> <?php if ($_SESSION['lan'] == 'CN') echo 'PDF格式'; elseif ($_SESSION['lan'] == 'CS')
                                    echo 'PDF格式'; else echo 'PDF File' ?></p>
                            <div class="quote__btn mt-2 mb-2">
                                <a href="assets/pdf/ABL%20Profile%20v23.1.pdf"
                                   target="_blank"
                                   class="ht_btn text-white"><span> <?php if ($_SESSION['lan'] == 'CN') echo '下載'; elseif ($_SESSION['lan'] == 'CS')
                                            echo '下载'; else echo 'Download' ?></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="theme__content text-xl-start mb-5 mt-5 mb-lg-0">
                            <h1 class="banner__main__title mb-20 mt-3 fs-2"> <?php if ($_SESSION['lan'] == 'CN') echo '一般條款'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '一般条款'; else echo 'General Terms and Conditions' ?></h1>
                            <p class="text-white"> <?php if ($_SESSION['lan'] == 'CN') echo 'PDF格式'; elseif ($_SESSION['lan'] == 'CS')
                                    echo 'PDF格式'; else echo 'PDF File' ?></p>
                            <div class="quote__btn mt-2 ">
                                <a href="assets/pdf/ABL%20GT&C%20ver%2021.1.pdf"
                                   target="_blank"
                                   class="ht_btn text-white"><span> <?php if ($_SESSION['lan'] == 'CN') echo '下載'; elseif ($_SESSION['lan'] == 'CS')
                                            echo '下载'; else echo 'Download' ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact__section start-->
        <div class="contact__section pt-55 pb-50 pt-lg-55 pb-lg-30" id="Contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact__img__wrapper mb-30">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3690.4345832124577!2d114.1463527!3d22.3372138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340407af6dfbdc83%3A0xf2f4847bf62a6335!2sCheung%20Sha%20Wan%20Plaza%3A%20Tower%201!5e0!3m2!1sen!2sbd!4v1698646933844!5m2!1sen!2sbd"
                                    width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="main__contact__form ps-xxl-3 mb-30">
                            <h3 class="contact__form__title mb-20"> <?php if ($_SESSION['lan'] == 'CN') echo '傳送信息'; elseif ($_SESSION['lan'] == 'CS')
                                    echo '传送信息'; else echo 'Send Us Message' ?></h3>
                            <form class="widget-form" action="submit_form.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="fname"
                                               placeholder= <?php if ($_SESSION['lan'] == 'CN') echo '姓名'; elseif ($_SESSION['lan'] == 'CS')
                                                   echo '姓名'; else echo '"Name"' ?> required>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <input type="text" name="lname"
                                               placeholder= <?php /*if ($_SESSION['lan'] == 'CN') echo '姓名'; elseif ($_SESSION['lan'] == 'CS')
                                                   echo '姓名'; else echo '"Last Name"' */?> required>
                                    </div>-->
                                    <input type="hidden" name="lname">
                                    <div class="col-md-6">
                                        <input type="email" name="email"
                                               placeholder= <?php if ($_SESSION['lan'] == 'CN') echo '電郵'; elseif ($_SESSION['lan'] == 'CS')
                                                   echo '电邮'; else echo '"Email"' ?>  required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone"
                                               placeholder= <?php if ($_SESSION['lan'] == 'CN') echo '電話'; elseif ($_SESSION['lan'] == 'CS')
                                                   echo '电话'; else echo '"Contact Number"' ?> required>
                                    </div>
                                    <div class="col-md-12">
                                        <input name="message"
                                               placeholder= <?php if ($_SESSION['lan'] == 'CN') echo '查詢內容'; elseif ($_SESSION['lan'] == 'CS')
                                                   echo '查询内容'; else echo '"Enquiry Details"' ?> required>
                                    </div>
                                    <div class="col-12">
                                        <button class="ht_btn hover-bg border-0" type="submit"
                                                name='contact_form'>  <?php if ($_SESSION['lan'] == 'CN') echo '傳送信息'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '传送信息'; else echo 'Send Message' ?>
                                            <img
                                                    src="assets/img/icon/arrow.svg" alt="icon"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact__section end-->
    </main>


    <!--footer-area start-->
    <footer class="footer-area">
        <div class="footer__bg__one" data-background="assets/img/footer/footer-bg-1.jpg">
            <div class="footer__wrapper__one pt-75 pb-20">
                <img src="assets/img/shape/pattern-3.svg" alt="" class="shape__1">
                <img src="assets/img/shape/pattern-4.svg" alt="" class="shape__2">
                <div class="container">
                    <div class="row gx-lg-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="footer__widget mb-30">
                                <a href="index.php" class="footer-logo d-inline-block mb-30">
                                    <img src="assets/img/new/logo2.png" alt="footer-logo" style="width: 60%;">
                                </a>
                                <p> <?php if ($_SESSION['lan'] == 'CN') echo '讓我們一起創造船舶燃料供應的未來，並體驗傳成燃油的與眾不同。'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '让我们一起创造船舶燃料供应的未来，并体验传成燃油的与众不同。'; else echo 'Join us in shaping the future of marine fuel solutions and experience the difference
                                    with Achieve Bunker.' ?></p>
                                <div class="social_media mt-35">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-2 col-lg-4 col-md-6">
                            <div class="footer__widget ps-xxl-5 ms-xxl-5 mb-30">
                                <h4 class="widget__title mb-30"><?php if ($_SESSION['lan'] == 'CN') echo '快速連結'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '快速连结'; else echo 'Quick Links' ?></h4>
                                <ul style="line-height: 12px">
                                    <li>
                                        <a href="index.php"><?php if ($_SESSION['lan'] == 'CN') echo '主頁'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '主页'; else echo 'Home' ?></a>
                                    </li>
                                    <li>
                                        <a href="#About"><?php if ($_SESSION['lan'] == 'CN') echo '關於我們'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '关于我们'; else echo 'About Us' ?></a>
                                    </li>
                                    <li>
                                        <a href="#Services"><?php if ($_SESSION['lan'] == 'CN') echo '服務介紹'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '服务介绍'; else echo 'Services' ?></a>
                                    </li>
                                    <li>
                                        <a href="#Products"><?php if ($_SESSION['lan'] == 'CN') echo '產品簡介'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '产品简介'; else echo 'Products' ?></a>
                                    </li>
                                    <li>
                                        <a href="#Coverage"><?php if ($_SESSION['lan'] == 'CN') echo '覆蓋範圍'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '复盖范围'; else echo 'Coverage' ?></a>
                                    </li>
                                    <li>
                                        <a href="#Download"><?php if ($_SESSION['lan'] == 'CN') echo '下載中心'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '下载中心'; else echo 'Downloads' ?></a>
                                    </li>
                                    <li>
                                        <a href="#Contact"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們'; elseif ($_SESSION['lan'] == 'CS')
                                                echo '联繫我们'; else echo 'Contact Us' ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-2 col-lg-4 col-md-6">
                            <div class="footer__widget mb-30 ps-xxl-5 ">
                                <h4 class="widget__title mb-30"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '联繫我们'; else echo 'Contact Us' ?></h4>
                                <p class="fs-6"
                                   style="    line-height: 25px;"><?php if ($_SESSION['lan'] == 'CN') echo '  <b>地址： </b> <br> 香港九龍荔枝角長沙灣道833號長沙灣廣場1座11樓1101室 '; elseif ($_SESSION['lan'] == 'CS')
                                        echo '<b>地址： </b> <br> 香港九龙荔枝角长沙湾道833号长沙湾广场1座11楼1101室'; else echo '  <b>Address : </b> <br> Room 1101, 11/F, Tower 1, Cheung Sha Wan Plaza, 833
                                        Cheung Sha
                                        Wan Road,
                                        Lai Chi Kok, Kowloon, Hong Kong' ?>

                                </p>
                                <p class="fs-6" style="text-align: justify"><?php if ($_SESSION['lan'] == 'CN') echo '<b>電話： </b> <br>+852 3996 9455 /
                                        +852 6220 9634'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '<b>电话 : </b> <br>+852 3996 9455 /
                                        +852 6220 9634'; else echo '<b>Tel : </b> <br>+852 3996 9455 /
                                        +852 6220 9634' ?>

                                </p>
                                <p class="fs-6"
                                   style="text-align: justify"><?php if ($_SESSION['lan'] == 'CN') echo ' <b>電子郵件 : </b> <br>sales@achievebunker.com'; elseif ($_SESSION['lan'] == 'CS')
                                        echo '<b>电子邮件 : </b> <br>sales@achievebunker.com'; else echo ' <b>Email : </b> <br>sales@achievebunker.com' ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__area pt-50 pb-25">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 text-lg-start text-center">
                            <div class="copyright__text mb-30">
                                <p>
                                    <a class="fw-bold" href="#">Achieve Bunker</a>
                                    © 2023, All Rights Reserved
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 text-lg-end text-center ">
                            <ul class="footer__menu mb-30">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->


</div>
<!-- main-page-wrapper end -->


<!-- JS here -->

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/plugins.js"></script>


<!--Custom JS here -->
<script src="assets/js/main.js"></script>

<script>

    window.addEventListener('hashchange', function () {
        let hash = window.location.hash.substring(1);
        scrollToId(hash);
    });

    window.addEventListener('load', function () {
        if (window.location.hash) {
            let hash = window.location.hash.substring(1);
            scrollToId(hash);
        }
    });

    function scrollToId(id) {
        let navbarHeight = 150;
        let target = document.getElementById(id);
        if (target) {
            window.scrollTo({
                top: target.offsetTop - navbarHeight,
                behavior: 'smooth'
            });
        }
    }

    function closeNavbar() {
        document.getElementById("navToggle").click();
    }
</script>
</body>

</html>