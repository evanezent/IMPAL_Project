<body class="container-fluid">
    <div class="box-login text-center">
        <div class="login-title">
            <h3>Admin Login <b>EVANUE</b></h3>
        </div>
        <div class="form-login">
        <form action="<?= base_url("admin/login_db") ?>" method="post">
            <div class="form-group">
                <input type="input" class="form-control" name="user-admin" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass-admin" placeholder="Password">
            </div>
            <button type="submit" class="user_button btn">Submit</button>
        </form>
        </div>
        
    </div>
</body>