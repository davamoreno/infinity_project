<section class="p-4">
    <h3 class="mt-4">Edit Profile</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($user['name']);?>" disabled>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($user['email']);?>" disabled>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" value="<?php echo htmlspecialchars($user['username']);?>">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>    
</section>
