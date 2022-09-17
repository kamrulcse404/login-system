<div class="col-8">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="text-center" style="color: #405e48;">User Login Form</h4>
            </div>
            <form method="POST">
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
                    <button type="submit" class="btn btn-outline-success">Login</button>
                </div>
                <div class="form-group mt-2">
                    <a href="signup.php" class="btn btn-outline-info">SignUp</a>
                    <a href="#" class="btn btn-outline-secondary">Forget Password</a>
                </div>
            </form>
        </div>
    </div>
</div>