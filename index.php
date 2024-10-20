<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'inc/url.php' ?>

<head>

   

    <!-- Page Title -->
    <title>Home Sweet Home Real Estate Company</title>


    <?php include 'inc/style.php' ?>

</head>

<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <?php include 'inc/header.php' ?>

        <!-- SLIDER AREA START -->
        <div class="ltn__slider-area ltn__slider-3  section-bg-2 slider-hight-css">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 slider-hight-css">

                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60 slider-hight-css" data-bs-bg="<?php echo $url; ?>assets/images/property-solution.jpg">
                    <div class="ltn__slide-item-inner  text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Home Sweet Home</h6>
                                            <h1 class="slide-title animated">Home Sweet Home</h1>
                                            <div class="slide-brief animated pr-0-css">
                                                <p>Welcome to Home Sweet Home Real Estate Company! We are committed to making your real estate journey smooth and successful, whether you're buying, selling, or renting your dream home</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60 slider-hight-css" data-bs-bg="<?php echo $url; ?>assets/images/apartments.jpg">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Home Sweet Home</h6>
                                            <h1 class="slide-title animated">Home Sweet Home</h1>
                                            <div class="slide-brief animated">
                                                <p>Welcome to Home Sweet Home Real Estate Company! We are committed to making your real estate journey smooth and successful, whether you're buying, selling, or renting your dream home</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="<?php echo $url; ?>" class="theme-btn-1 btn btn-effect-1">Our Services</a>
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
        <!-- SLIDER AREA END -->
        <!--SEARCH AREA START-->
        <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115--- home-sec-1-mt-resp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10 box">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="http://localhost:8080/property/search" method="post" class="ltn__car-dealer-form-box row">
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-4 col-md-6">
                                            <input type="text" name="city" class="form-control search-input-field-css" placeholder="City, Community or Building..." required>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                            <select name="propertyType" class="nice-select search-input-field-css" required>
                                                <option value="">Property Type</option>
                                                <option value="Development">Development</option>
                                                <option value="Apartment">Apartment</option>
                                                <option value="Townhouse">Townhouse</option>
                                                <option value="Villa">Villa</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-2 col-md-6">
                                                <select class="nice-select search-input-field-css">
                                                    <option>Rent</option>
                                                    <option>Sale</option>
                                                </select>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                <div class="btn-wrapper text-center mt-0">
                                                    <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase search-btn-pd-css">Find Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SEARCH AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-115 pb-100 home-sec-2-pd-css-n">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <!-- <div class="about-us-img-wrap about-img-left">
                            <img src="<?php echo $url; ?>assets/img/others/11.png" alt="About Us Image">
                         </div> -->
                        <div class="home-about-sec-img-1 d-none d-lg-block">

                        </div>
                        <div class="home-about-sec-img-2 d-none d-lg-block">

                        </div>

                        <div class="home-about-sec-img-3 d-block d-lg-none">

                        </div>

                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-30">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">About Us</h6>
                                <h1 class="section-title main-heading-font-css">Welcome to Home Sweet Home</h1>
                                <p>At Home Sweet Home, we are dedicated to helping you find your perfect sanctuary. With a passion for delivering exceptional real estate services, we guide you through every step of the home-buying or renting process. Whether you're searching for your dream home or a great investment property, we offer expert advice and personalized assistance to ensure you find a place you'll love. Trust us to turn your real estate dreams into reality.</p>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3 h-sec-1-card-sub-css">
                                <div class="ltn__feature-info">
                                    <h4 class="sub-heading-m">The Perfect Residency</h4>
                                    <p>Discover your ideal living space with Home Sweet Home. We provide homes that match your lifestyle, combining comfort, luxury, and convenience in every property we offer. </p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3 h-sec-1-card-sub-css">
                                <div class="ltn__feature-info">
                                    <h4 class="sub-heading-m">Affordable Luxury</h4>
                                    <p>Find homes in the best neighborhoods with Home Sweet Home. Our properties are strategically located in prime areas, offering easy access to schools, workplaces, shopping centers, and recreational activities.</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3 h-sec-1-card-sub-css">
                                <div class="ltn__feature-info">
                                    <h4 class="sub-heading-m">Our Latest Listings</h4>
                                    <p> Whether you're looking for a modern apartment with stunning city views or a cozy family home in a peaceful neighborhood, Home Sweet Home has something perfect for everyone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- PROJECT SLIDER AREA START -->
        <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7 home-sec-3-bg-css">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h1 class="section-title main-heading-font-css">New Available Apartments </h1>
                            <p>This modern apartment offers breathtaking views and top-of-the-line amenities. Perfectly situated for convenience and comfort, it’s available for rent today.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="section-title-area ltn__section-title-2---">
                            <a href="<?php echo $url; ?>property.php" class="btn theme-btn-1 btn-effect-1 text-uppercase">View More</a>
                        </div>
                    </div>
                </div>
                <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>property-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://www.wienerberger.co.uk/reference-projects/housing/apartments/jcr:content/root/responsivegrid_copy/teaserbox/smallteaserbox/image.imgTransformer/crop_1to1/lg-5/1696328373544/Corp_Wall_06.jpg);"></div>
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <i class="flaticon-pin"></i> Luxury Apartment with Stunning Views
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>property-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>property-details.php" class="home-project-head-css-a">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p>This modern luxury apartment offers unparalleled views of the city skyline. Featuring three spacious bedrooms, two sleek bathrooms, and a vast 3,450 square feet of living space, this property is designed for those who seek comfort, style, and convenience. </p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>property-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://cplusdesign.lk/wp-content/uploads/2021/11/Interior-Design-Idea-For-Apartment.jpg);"></div>
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <i class="flaticon-pin"></i> Contemporary Apartment with Chic Interiors
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>property-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>property-details.php" class="home-project-head-css-a">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p> This elegantly designed apartment boasts a sophisticated interior layout and is located in a vibrant neighborhood. With three well-appointed bedrooms,  this home combines modern aesthetics with practical functionality.</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>property-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://uniquehomes.bg/wp-content/uploads/2018/01/beautiful-modern-apartment-exterior-apartment-exterior-design-ideas-philippines-apartment-exterior-design-ideas-1024x714.jpg);"></div>
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <i class="flaticon-pin"></i> Family-Friendly Apartment in Prime Location
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>property-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>property-details.php" class="home-project-head-css-a">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p>This apartment is ideal for families seeking a blend of space, convenience, and modern amenities. Offering three cozy bedrooms, two spacious bathrooms, and 3,450 square feet of living area, it features a well-thought-out layout for maximum comfort.</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>property-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://en.idei.club/uploads/posts/2023-06/thumbs/1687083089_en-idei-club-p-apartment-exterior-design-dizain-krasivo-20.jpg);"></div>
                                </a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <i class="flaticon-pin"></i> Modern Apartment with Urban Lifestyle Amenities
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>property-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>property-details.php" class="home-project-head-css-a">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p>Experience modern city living at its finest with this contemporary apartment. Complete with three bedrooms, two stylish bathrooms, and a spacious 3,450 square feet, this property offers a perfect balance of comfort and urban lifestyle.</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROJECT SLIDER AREA END -->

        <div class="ltn__about-us-area section-bg-1 bg-image-right-before pt-120 pb-90 home-sec-4-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">Building Facilities</h6>
                                <h1 class="section-title home-sec-4-heading-css">Making living spaces
                                    More Beautiful</h1>
                                <p class="home-sec-4-text-color">Over 39,000 people work for us in more than 70 countries all over the
                                    This breadth of global coverage, combined with specialist services</p>
                            </div>
                            <ul class="ltn__list-item-half ltn__list-item-half-2 list-item-margin clearfix">
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    Living rooms are pre-wired for Surround
                                </li>
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    Luxurious interior design and amenities
                                </li>
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    Nestled in the Buckhead Vinings communities
                                </li>
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    Private balconies with stunning views
                                </li>
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    A rare combination of inspired architecture
                                </li>
                                <li class="home-sec-4-text-color">
                                    <i class="icon-done"></i>
                                    Outdoor grilling with dining court
                                </li>
                            </ul>
                            <div class="  ltn__animation-pulse2 text-center mt-30">
                                <a class="ltn__video-play-btn bg-white--- ltn__secondary-bg" href="https://www.youtube.com/embed/AydOGMIogQo?si=Nnc02FSR1qCjwq4Q" data-rel="lightcase">
                                    <i class="icon-play  ltn__secondary-color--- white-color"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BLOG SLIDER AREA START -->
        <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7 home-sec-3-bg-css bg-white-sec-blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h1 class="section-title main-heading-font-css">Recently Added Apartments</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="section-title-area ltn__section-title-2---">
                            <a href="<?php echo $url; ?>blog.php" class="btn theme-btn-1 btn-effect-1 text-uppercase">View More</a>
                        </div>
                    </div>
                </div>
                <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>blog-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://www.wienerberger.co.uk/reference-projects/housing/apartments/jcr:content/root/responsivegrid_copy/teaserbox/smallteaserbox/image.imgTransformer/crop_1to1/lg-5/1696328373544/Corp_Wall_06.jpg);"></div>
                                </a>

                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                Added: 01-02-2024
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>blog-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>blog-details.php" class="home-project-head-css-a">Luxurious Cityscape View Apartment</a></h2>
                                <div class="product-description">
                                    <p>Enjoy breathtaking cityscape views from this contemporary apartment. Located in a prime area, it offers easy access to key locations and modern conveniences. A perfect blend of comfort and style.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>blog-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://cplusdesign.lk/wp-content/uploads/2021/11/Interior-Design-Idea-For-Apartment.jpg);"></div>
                                </a>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                Added: 01-02-2024
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>blog-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>blog-details.php" class="home-project-head-css-a">Cozy Downtown Studio Apartment</a></h2>
                                <div class="product-description">
                                    <p>This charming studio apartment offers the ideal mix of coziness and accessibility. It's perfect for young professionals or small families looking for a convenient urban lifestyle.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>blog-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://uniquehomes.bg/wp-content/uploads/2018/01/beautiful-modern-apartment-exterior-apartment-exterior-design-ideas-philippines-apartment-exterior-design-ideas-1024x714.jpg);"></div>
                                </a>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                Added: 01-02-2024
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>blog-details.php">More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>blog-details.php" class="home-project-head-css-a">Spacious Family Apartment with Balcony</a></h2>
                                <div class="product-description">
                                    <p>A spacious family apartment featuring an expansive balcony with a beautiful view. The perfect spot to relax while being located near schools, parks, and essential services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center--- home-project-card-b-css">
                            <div class="product-img">
                                <a href="<?php echo $url; ?>blog-details.php">
                                    <div class="home-property-sec-img-bg-css" style=" background-image: url(https://en.idei.club/uploads/posts/2023-06/thumbs/1687083089_en-idei-club-p-apartment-exterior-design-dizain-krasivo-20.jpg);"></div>
                                </a>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                Added: 01-02-2024
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li class="home-project-card-v-m-btn-width">
                                                <a href="<?php echo $url; ?>blog-details.php"> More Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info pb-20">
                                <h2 class="product-title home-project-head-css"><a href="<?php echo $url; ?>blog-details.php" class="home-project-head-css-a">Modern Apartment with Stylish Interiors</a></h2>
                                <div class="product-description">
                                    <p>This apartment is designed for those who appreciate elegance and sophistication. Featuring stylish interiors, it's located in a vibrant neighborhood with a variety of amenities.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG SLIDER AREA END -->

        <?php include 'inc/footer.php' ?>

    </div>
    <!-- Body main wrapper end -->

    <?php include 'inc/script.php' ?>

</body>

</html>