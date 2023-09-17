<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Project</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>



    <!-- newsletter section -->
    <section id="newsletter" class="newsletter py-5">
        <div class="container" data-aos="zoom-in-up">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <h2 class="text-uppercase">
                        newsletter
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti blanditiis similique eum, aut culpa maiores cupiditate alias exercitationem error nesciunt.
                    </p>
                    <form action="">
                        <div class="input-group mt-5 mb-4">
                            <input type="text" class="text-capitalize form-control" placeholder="enter your email">
                            <div class="input-group-append">
                                <div class="input-group-text form-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class=" btn btn-yellow">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter section -->

    <!-- skills section -->
    <section id="skills" class="skills py-5">
        <div class="container">
            <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
                    <div class="skill-icon mr-3">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="skill-text">
                        <h3 class="text-uppercase text-white">
                            free shipping
                        </h3>
                        <p class="text-capitalize text-muted">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
                        </p>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
                    <div class="skill-icon mr-3">
                        <i class="fas fa-comment-dollar"></i>
                    </div>
                    <div class="skill-text">
                        <h3 class="text-uppercase text-white">
                            price promise
                        </h3>
                        <p class="text-capitalize text-muted">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
                        </p>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4 mx-auto d-flex my-3">
                    <div class="skill-icon mr-3">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="skill-text">
                        <h3 class="text-uppercase text-white">
                            lifetime warranty
                        </h3>
                        <p class="text-capitalize text-muted">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of skills section -->

    <!-- footer section -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <h1 class="text-uppercase font-weight-bold text-yellow d-inline-block footer-title">
                        comfy sloth
                    </h1>
                    <!-- footer icons -->
                    <div class="footer-icons d-flex justify-content-center my-5">
                        <!-- single icon -->
                        <a href="" class="footer-icon mx-2">
                            <div class="fab fa-facebook"></div>
                        </a>
                        <!-- end of single icon -->
                        <!-- single icon -->
                        <a href="" class="footer-icon mx-2">
                            <div class="fab fa-twitter"></div>
                        </a>
                        <!-- end of single icon -->
                        <!-- single icon -->
                        <a href="" class="footer-icon mx-2">
                            <div class="fab fa-youtube"></div>
                        </a>
                        <!-- end of single icon -->
                        <!-- single icon -->
                        <a href="" class="footer-icon mx-2">
                            <div class="fab fa-google-plus"></div>
                        </a>
                        <!-- end of single icon -->
                        <!-- single icon -->
                        <a href="" class="footer-icon mx-2">
                            <div class="fab fa-instagram"></div>
                        </a>
                        <!-- end of single icon -->
                    </div>
                    <!-- footer icons -->
                    <p class="text-muted text-capitalize w-75 mx-auto text-center">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore illum illo exercitationem ex porro consequuntur quae mollitia qui accusamus! Molestiae.
                    </p>
                    <div class="footer-contact d-flex justify-content-around mt-5">
                        <!-- single contact -->
                        <div class="text-capitalize">
                            <span class="contact-icon mr-2">
                                <i class="fas fa-map"></i>
                            </span>
                            123 Main Street, Los Angeles
                        </div>
                        <!-- end of single contact -->
                        <!-- single contact -->
                        <div class="text-capitalize">
                            <span class="contact-icon mr-2">
                                <i class="fas fa-phone"></i>
                            </span>
                            Phone : + (310) 111 2222
                        </div>
                        <!-- end of single contact -->
                        <!-- single contact -->
                        <div class="text-capitalize">
                            <span class="contact-icon mr-2">
                                <i class="fas fa-envelope"></i>
                            </span>
                            Email : Eamil@Email.Com
                        </div>
                        <!-- end of single contact -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer section -->
    <!-- modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">product info</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--end of  modal header -->
                <!-- modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col text-center">
                            <img src="img/img-products/product-1.png" class="img-fluid" alt="" />
                            <!-- ratings -->
                            <div class="ratings">
                                <span class="rating-icon"><i class="fas fa-star"></i></span>
                                <span class="rating-icon"><i class="fas fa-star"></i></span>
                                <span class="rating-icon"><i class="fas fa-star"></i></span>
                                <span class="rating-icon"><i class="fas fa-star"></i></span>
                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                <span class="text-capitalize">(25 customer reviews)</span>
                            </div>
                            <!-- end of ratings -->
                            <h2 class="text-uppercase my-2">premium office armchair</h2>
                            <h2>$10.00 - $200.00</h2>
                            <p class="lead text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
                                porro.
                            </p>
                            <!-- colors -->
                            <h5 class="text-uppercase">
                                colors :
                                <span class="d-inline-block products-color products-color-black mr-2"></span>
                                <span class="d-inline-block products-color products-color-red mr-2"></span>
                                <span class="d-inline-block products-color products-color-blue mr-2"></span>
                            </h5>
                            <!-- end of colors -->
                            <!-- sizes -->
                            <h5 class="text-uppercase">
                                sizes : <span class="mx-2">xs</span> <span class="mx-2">s</span>
                                <span class="mx-2">m</span> <span class="mx-2">l</span>
                                <span class="mx-2">xl</span>
                            </h5>
                            <div class="d-flex flex-wrap">
                                <!-- cart buttons -->
                                <div class="d-flex my-2">
                                    <span class="btn btn-black mx-1">-</span>
                                    <span class="btn btn-black mx-1">4</span>
                                    <span class="btn btn-black mx-1">+</span>
                                </div>
                                <button class="btn btn-black my-2 mx-2">wishlist</button>
                                <button class="btn btn-yellow my-2 mx-2">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>












    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- fontwesome js -->
    <script src="js/all.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>
</body>

</html>