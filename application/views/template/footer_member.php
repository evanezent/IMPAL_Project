<footer class="fixed-bottom">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="footer-copyright text-center py-3 bg-light">
        © 2019 Copyright <span class="author"><a class="text-muted" href="">Evanue</a></span>
    </div>
    <!-- Pilih Menu -->
    <script>
        $(document).ready(function() {
            $('#sel_menu').change(function() {
                var selectedd = $('#sel_menu option:selected');  //select selected menu
                var form1 = document.getElementById("input-event");  //select type of menu input
                var form2 = document.getElementById("input-ticket");
                var opsi1 = document.getElementById("select-type1"); //select "select option" element of input
                var opsi2 = document.getElementById("select-type2"); //select "select option" element of management
                var table1 = document.getElementById("kelola-event"); //select type of menu management
                var table2 = document.getElementById("kelola-ticket");

                if (selectedd.val() == 'input') {
                    opsi1.style.display = "block";
                    console.log(selectedd.val());
                    table2.style.display = "none";
                    table1.style.display = "none";
                    opsi2.style.display = "none";

                    $('#sel_type1').change(function() {
                        var selecteddd = $('#sel_type1 option:selected');
                        // var form1 = document.getElementById("input-event");
                        // var form2 = document.getElementById("input-ticket");

                        if (selecteddd.val() == 'event') {
                            form1.style.display = "flex";
                            form2.style.display = "none";
                            console.log(selecteddd.val());
                            console.log('11');
                        } else if (selecteddd.val() == 'ticket') {
                            form2.style.display = "flex";
                            form1.style.display = "none";
                            console.log(selecteddd.val());
                            console.log('11');
                        } else {
                            form2.style.display = "none";
                            form1.style.display = "none";
                        }
                    });
                    selectedd = $('#sel_menu option:selected');
                } 
                else if (selectedd.val() == 'management') {
                    opsi2.style.display = "block";
                    console.log(selectedd.val());
                    form2.style.display = "none";
                    form1.style.display = "none";
                    opsi1.style.display = "none";

                    $('#sel_type2').change(function() {
                        var selecteddd = $('#sel_type2 option:selected');
                        // var table1 = document.getElementById("kelola-event");
                        // var table2 = document.getElementById("kelola-ticket");
                        if (selecteddd.val() == 'event') {
                            table1.style.display = "block";
                            table2.style.display = "none";
                            console.log(selecteddd.val());
                            console.log('22');
                        } else if (selecteddd.val() == 'ticket') {
                            table2.style.display = "block";
                            table1.style.display = "none";
                            console.log(selecteddd.val());
                            console.log('22');
                        } else {
                            table2.style.display = "none";
                            table1.style.display = "none";
                        }
                    });
                    selectedd = $('#sel_menu option:selected');
                } 
                else {
                    opsi.style.display = "none";
                    console.log(selectedd.val());

                }
            });
        });
    </script>
</footer>