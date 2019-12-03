<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="footer-copyright text-center py-3 bg-light">
        © 2019 Copyright <span class="author"><a class="text-muted" href="">Evanue</a></span>
    </div>
    <script>
		$(document).ready(function(){
			$('#sel1').change(function(){
				var selectedd = $('#sel1 option:selected');
				var elm1 = document.getElementById("admin-event");
				var elm2 = document.getElementById("admin-ticket");
				console.log(selectedd.val());
				console.log(elm2);
				if (selectedd.val() == 'event'){
					elm1.style.display = "block";
					elm2.style.display = "none";
					console.log(selectedd.val());
				}
				else if (selectedd.val() == 'ticket'){
					elm2.style.display = "block";
					elm1.style.display = "none";
					console.log(selectedd.val());
				}
				else{
					elm2.style.display = "none";
					elm1.style.display = "block";
				}
			});
		});
	</script>
</footer>