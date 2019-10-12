<!-- FOOTER -->
<footer>
    <!-- MODAL LOGIN -->
    <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="head-login text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Log in</h4>
                    </div>
                    <div class="form-login">
                        <form action="<?= base_url('User/login_db') ?>" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="username" name="username">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="password" name="password">
                            </div>
                            <div class="footer-login text-center">
                                <button type="submit" class="btn d-block">LOGIN</button>
                                <a href="#" class="text-muted d-block">Forgot your password</a>
                            </div>
                        </form>
                    </div>
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
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
            console.log("AAAAAAAAAAA")
        };

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky")
            }
        }
    </script>
</footer>