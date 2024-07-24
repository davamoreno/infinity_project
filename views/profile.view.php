<?php require("partials/head.php") ?>
<?php require("partials/navbar.php") ?>

<div class="container profile-wrapper mb-4">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <?php require("partials/menuUser.php") ?>
        </div>
        <div class="col-sm-8 card ms-auto">
            <div class="tab-content" id="profileTabsContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel">
                    <?php require('pages/user/profile.php') ?>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php require("partials/footer.php") ?>