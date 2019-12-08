<body class="container-fluid">
    <?php if ($salah == 2) { ?>
        <div style="width: 50vw" class="text-center mx-auto mt-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username atau Password salah !</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <script>
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").slideUp(500);
            });
        </script>
    <?php } ?>
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
                <button type="submit" class="user_button btn">Login</button>
            </form>
        </div>
    </div>
</body>