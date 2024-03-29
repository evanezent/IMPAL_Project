<body class="container-fluid">
<form action="<?php echo base_url('User/searchTicket'); ?>" method="post" class="searchbar">
        <input class="search_input" type="text" name="keyword">
        <i class="fas fa-search" style="font-size: 1.5em"><input type="submit" hidden></i>
    </form>
    <div class="jumbotron text-center mt-2">
        <div class="title-section">
            <h3>Tickets</h3>
        </div>
    </div>
    <div id="list" class="container d-block">
        <?php for ($i = 0; $i < count($tickets, 0); $i = $i + 2) { ?>
            <div class="row">
                <?php foreach (array_slice($tickets, $i, 2) as $ev) : ?>
                    <div class="card">
                        <div class="img-card">
                            <img class="card-img-top" src="<?php echo base_url(); ?>upload/ticket/<?php echo $ev['poster'] ?>" alt="UNKNOWN">
                        </div>
                        <div class="card-title"><?= $ev['namaTicket'] ?></div>
                        <div class="card-body text-center">
                            <a href="<?= base_url('post/ticket/');echo $ev['idTicket'] ?>" class="btn">Read More</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php } ?>

    </div>
</body>

</html>