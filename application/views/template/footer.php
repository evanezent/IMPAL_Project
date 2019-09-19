<!-- FOOTER -->
<footer>
    <!-- MODAL LOGIN -->
    <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Log in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="username" name="username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="password" name="password">
                        </div>

                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn d-block"><a href="<?= base_url('User/login_db')?>">Login</a></button>
                    <a href="#" class="text-muted d-block">Forgot your password</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="footer-copyright text-center py-3 bg-light">
    	© 2019 Copyright <span class="author"><a class="text-muted" href="">Evanue</a></span>
    </div>
</footer>
