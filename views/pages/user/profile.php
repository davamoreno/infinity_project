<section class="p-4">
<h3 class="my-4 text-center">Your Profile</h3>
    <form action="" method="GET">
        <div class="mb-5 row">
            <div class="col-5 pb-4 d-flex align-items-center" style="flex-direction: column;">
                <img src="<?php echo htmlspecialchars($user['profile']); ?>" alt="" width="150px" height="150px" style="border-radius:60%; object-fit:fill; position:relative;" />
                <div class="text-center pt-2">
                    <h5 class="card">Image Profile</h5>
                </div>
            </div>
            <div class="col-5 ms-auto pt-3">
                <p>Name: <?php echo htmlspecialchars($user['name']); ?></p>
                <p>Email:<?php echo htmlspecialchars($user['email']); ?></p>
                <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
            </div>
        </div>
    </form>
</section>
