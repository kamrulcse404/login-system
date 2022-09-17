
<div class="col-8">
    <div class="card">
        <div class="card-body">
            <?php if (!empty($_SESSION['error'])) : ?>
                <div class="card-title">
                    <h5 class="text-center" style="color: #e01414;"><?php echo $_SESSION['error']; ?></h5>
                </div>
            <?php endif; ?>
            <div class="card-title">
                <h4 class="text-center" style="color: #405e48;">User Registration Form</h4>
            </div>
            <form method="POST">
                <div class="form-group mt-2">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required>
                </div>
                <div class="form-group mt-2">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" required>
                </div>
                <div class="form-group mt-2">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter your user name" required>
                </div>
                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" name="user_email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group mt-2">
                    <label>Password</label>
                    <input type="password" name="user_password" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary">SignUp</button>
                    <a href="login.php" class="btn btn-outline-primary d-left">Back To Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
