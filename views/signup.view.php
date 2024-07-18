<?php require("partials/head.php") ?>
    <?php require("partials/navbar.php") ?>
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-black text-white" style="border-radius: 1rem;" data-aos="zoom-in">
                        <div class="card-body p-5">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase text-center">Sign Up</h2>
                                <p class="text-white-50 mb-5 text-center">Please Register To Create An Account</p>
                                <form action="" method="POST">
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="usernameX">Username</label>
                                        <input type="text" name="username" id="usernameX" class="form-control form-control-lg" require />
                                    </div>
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeNameX">Name</label>
                                        <input type="text" name="name" id="typeNameX" class="form-control form-control-lg" require />
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" require />
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" require />
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordConfX">Password Confirmation</label>
                                        <input type="password" id="typePasswordConfX" name="passwordConf"  class="form-control form-control-lg" require />
                                    </div>
                                    
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeImageX">Select Profile Image</label>
                                        <input type="file" id="typeImageX" name="profile" class="form-control form-control-lg" />
                                    </div>
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary w-100 btn-lg px-5" style="border-radius: 10px;" type="submit">Register</button>
                                </form>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Already have an account? <a href="login.php" class="text-white-100 fw-bold">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require("partials/footer.php") ?>