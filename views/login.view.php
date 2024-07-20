<?php 
    require("partials/head.php");
    require("partials/navbar.php"); 
?>
    <section class="gradient-custom">
        <?php if(isset($_SESSION['id'])): ?>
            <div class="mt-4 text-white">
                <h1>Page Sudah Tidak Ada Karena Kamu Sudah Login</h1>
            </div>  
        <?php else: ?>
            <div class="container py-5 h-100 mt-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-black text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                    <form action="/login" method="POST">
                                        <div data-mdb-input-init class="form-outline form-white mb-4 input-field">
                                            <input type="text" name="username" id="usernameX" class="form-control form-control-lg">
                                            <label class="form-label" for="usernameX">Username</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline form-white mb-4 input-field">
                                          <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                                          <label class="form-label" for="typePasswordX">Password</label>
                                        </div>
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary w-100 btn-lg px-5" style="border-radius: 10px;" type="submit">Login</button>
                                    </form>
                                    <p class="small mb-5 pb-lg-2"><a class="underline" href="#!">Forgot password?</a></p>
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Don't have an account? <a href="signup" class="text-white-100 fw-bold">Sign Up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
    </section>

<?php require("partials/footer.php"); ?>