<div class="container">

    <div class="row mt-3" id="movie-list">

        <?php 
            $no = 0;
            foreach($list_movie['Search'] as $movie) : ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="<?= $movie["Poster"]; ?>" class="card-img-top" height="300" alt="Card image cap">
                <div class="card-body" style="height: 150px;">
                    <h5 class="card-title"><?= $movie["Title"]; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $movie["Year"]; ?></h6>



                </div>
                <div class="card-footer">
                    <a href="<?= base_url()?>/movie/detail/<?=$movie["imdbID"];?>" class="btn btn-dark">See
                        Detail</a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="js/script.js"></script>
</body>

</html>