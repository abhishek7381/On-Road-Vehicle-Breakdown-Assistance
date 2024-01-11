<?php
$title = 'Home';
$activePage = 'home';
include('includes/head.php');
?>

<!-- Background image -->
<div class="bg-image  container-fluid" id="bgimage"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/77.webp'); height: 70vh; ">
    <div class="row justify-content-center">
        <div class="col-lg-12 text-white text-center mtfororvba ">
            <h1 id="bgtext">On Road Vehicle Breakdown Assistance</h1>
            <h2>Need roadside assistance?</h2>
            <button type="button" class="btn btn-primary "> <a href="user-login.php"
                    class="text-decoration-none text-black">Login</a></button>
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>

<!-- Background image -->
<!-- content  -->
<div class="container-fluid">
    <div class="row justify-content-evenly   " id="home">
        <div class="col-lg-3 bg-dark text-white d-flex p-2" id="content">
            <i class="bi bi-clock"></i> &nbsp; Less than 30 minutes arival
        </div>
        <div class="col-lg-3 bg-dark text-white d-flex p-2 " id="content">
            <i class="bi bi-telephone"></i> &nbsp; Live 24/7 customer support
        </div>
    </div>
    <!-- about us -->

    <!-- WHY US -->
    <div class="row justify-content-center ">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8  whyus">
            <h1 class="text-center">Why us?</h1>
            <div class="row justify-content-evenly">
                <div class="col-lg-5 ">
                    <!-- <h3>Allianz roadside assistance is a world leader in assistance services.</h3> -->
                    ORVBA is a world leader in assistance services.
                    We master in the creation and delivery of unique solutions that combine assistance services and
                    technology
                    to
                    provide premier offerings

                    At ORVBA, we push boundaries to provide innovative protection and care for our customers to
                    make people’s lives simpler, safer, and more enjoyable.
                </div>
                <div class="col-lg-6">
                    <img src="photos/car.png" class="adjustimg" alt="photo" width="100%">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 whyus">
            <div class="row">
                <div class="col-lg-4 paragraph">
                    <h3>Our expertise to preserve mobility</h3>
                    We are committed to your mobility, assist remotely when possible, provide on-site repair, refueling,
                    towing the vehicle to the nearest garage or a specific location, and much more. Whether you are on
                    your way to some exciting road trip or be it your daily commute, we do everything in our power to
                    provide rapid repair and support to our customers from the event to its resolution.
                </div>
                <div class="col-lg-8">
                    <img src="photos/motorcycle-adventure-picture-id472082714.jpeg" class="adjustimg" alt="photp"
                        width="100%">
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <!-- WHAT WE OFFER -->
    <div class="row">
        <div class="col-lg-6 mt-4">
            <img src="photos/5098287.jpg" class="img-fluid adjustimg" alt="photo" id="photo">
        </div>
        <div class="col-lg-6 mt-5">
            <h1>WHAT WE OFFER</h1>
            <p>we provide fast,courteous and inexpensive roadsite assistance in india. we are fully insured and been in
                business since 2012. we are ready to respond to all your vehicle emergency needs 24 hours a day, seven
                days a
                week
            <ul class="list-unstyled">
                <li> <i class="bi bi-check2 bg-warning"></i> More than <strong>10 year of experience </strong></li>
                <li> <i class="bi bi-check2 bg-warning"></i> Short arrival time of <strong>30 minutes or less </strong>
                </li>
                <li> <i class="bi bi-check2 bg-warning"></i> <strong>zero hiddern price </strong></li>
                <li> <i class="bi bi-check2 bg-warning"></i> friendly and <strong>professional </strong> service</li>
                <li> <i class="bi bi-check2 bg-warning"></i> Available <strong>24 hours </strong> a day, <strong>7 days
                    </strong> a week</li>
            </ul>
            </p>
        </div>
    </div>

    <!-- join our team -->
    <div class="row justify-content-center text-center  text-white bg-secondary">
        <div class="col-lg-9">
            <p class="bg-secondary ">
            <h1>Join our team</h1>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam, quam explicabo quidem reprehenderit
            necessitatibus quasi quisquam perspiciatis nisi id, harum perferendis odit a tempora expedita, libero
            consequuntur excepturi debitis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt natus omnis
            enim vel cum provident voluptate nemo quod vitae ipsum laboriosam unde praesentium, at, adipisci, quos qui
            repudiandae necessitatibus! Commodi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
            pariatur
            dolore veniam, repudiandae voluptatibus a, quos corporis nobis, modi reiciendis quam tempora molestiae illum
            non
            iste aut. Nulla, harum porro!
            </p>
            <button type="button" class="btn btn-primary mt-2  mb-3 " id="apply"> <a href="mechanic-register.php"
                    class="text-decoration-none text-white ">Apply now </a></button>
        </div>
    </div>

    <!-- faq -->
    <div class="row justify-content-center">
        <h1 class="text-center mt-5">General fAQ</h1>
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!-- accordian -->
            <div class="accordion accordion-flush p-4 " id="accordionFlushExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is Roadside assistance?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Roadside assistance is a service provided by Us which assists you in
                            situations where you need help on the road with your vehicle. The service offers many
                            benefits from
                            getting your vehicle fixed on the spot to towing or taxi service to help you reach your
                            destination.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Does Roadside assistance affect vehicle warranty with manufacturer?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">As no unauthorised repairs are done and vehicle is towed to nearest
                            service
                            station in case of a major breakdown, roadside assistance does not affect vehicle warranty.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Why do i need roadside assistance for a good reliable vehicle?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Roadside assistance rescues you from minor and major mishaps that
                            can happen
                            anytime to anyone. Even when you have a good reliable vehicle, flat tyres, accidents or poor
                            fuel can
                            take you by surprise.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsefour" aria-expanded="false"
                            aria-controls="flush-collapsefour">
                            How fast is the service?
                        </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">While we strive to reach you as early as possible, actual time may
                            vary
                            depending on location of the vehicle. In most cases within the city, help is at hand in
                            maximum 50
                            minutes.</div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                Is there a vehicle age limit?
                            </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, vehicles more than 10 years old are not eligible for
                                roadside
                                assistance.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 "></div>
        <?php
include('includes/footer.php');
?>
