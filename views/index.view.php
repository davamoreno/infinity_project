<?php require("partials/head.php") ?>
    <?php require("partials/navbar.php") ?>
    <section class="home d-flex col-12 gap-5">
        <?php require("pages/homepage/banner.php") ?>
    </section>
    <main class="main-wrapper text-white">
    <section class="services py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
            <div data-aos="zoom-in" class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <a href="/services/web-development">
                        <div class="card-body">
                            <h3 class="card-title">Web Development</h3>
                            <p class="card-text">We create stunning and efficient websites tailored to your business needs.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h3 class="card-title">Mobile Apps</h3>
                        <p class="card-text">Developing high-quality mobile applications for both Android and iOS platforms.</p>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h3 class="card-title">IT Consulting</h3>
                        <p class="card-text">Providing expert advice to help you navigate the complex world of technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carousel-section py-5">
    <div class="container carousel-container">
        <h2 class="text-center mb-5">Featured Projects</h2>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/image/project1.jpg" class="d-block w-100" alt="Project 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Project Title 1</h5>
                        <p>Description for project 1.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/project2.jpg" class="d-block w-100" alt="Project 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Project Title 2</h5>
                        <p>Description for project 2.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/project3.jpg" class="d-block w-100" alt="Project 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Project Title 3</h5>
                        <p>Description for project 3.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="about-us py-5 text-white">
    <div class="container">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="row">
            <div data-aos="zoom-in" class="col-md-6">
                <img src="assets/image/about-us.jpg" alt="About Us" class="img-fluid rounded">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <p>We are a leading technology solutions provider, committed to delivering innovative and effective services to our clients. Our team of experts specializes in web development, mobile app development, and IT consulting, ensuring that we meet all your technology needs.</p>
                <p>Our mission is to empower businesses by providing cutting-edge technology solutions that drive growth and success. Join the many satisfied customers who have trusted us with their technology projects.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-us py-5">
    <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row">
            <div data-aos="zoom-in" class="col-md-6">
                <h4>Get in Touch</h4>
                <p>If you have any questions or would like to discuss a project, please don't hesitate to get in touch. We look forward to hearing from you!</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-envelope"></i> info@infinity.inc</li>
                    <li><i class="fa fa-phone"></i> +123 456 7890</li>
                    <li><i class="fa fa-map-marker"></i> 123 Technology Avenue, Tech City</li>
                </ul>
            </div>
            <div data-aos="zoom-in" class="col-md-6">
                <?php if(isset($_SESSION['id'])): ?>
                <form>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
                <?php else : ?>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
                <?php endif ; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h3 class="text-center">Project That We Made</h3>
        <div class="slider" id="slider" style="--width: 120px; --height: 70px; --quantity: -10; ">
            <div class="list">
                <div class="item" style="--position: 1"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 2"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 3"><img src="assets/image/slider3.jpg" alt=""></div>
                <div class="item" style="--position: 4"><img src="assets/image/slider4.jpg" alt=""></div>
                <div class="item" style="--position: 5"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 6"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 7"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 8"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 9"><img src="assets/image/slider1_2.jpg" alt=""></div>
                <div class="item" style="--position: 10"><img src="assets/image/slider1_2.jpg" alt=""></div>
            </div>
        </div>
    </section>
</main>

<?php require("partials/footer.php") ?>