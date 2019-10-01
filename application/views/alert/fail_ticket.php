<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data ticket <strong>gagal</strong> ditambahkan !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<script>
  $(".alert").fadeTo(2000, 500).slideUp(500, function() {
    $(".alert").slideUp(500);
  });
</script>