<div class="container mt-4">
    <div class="row mt-3">
        <?php 
foreach($news['articles'] as $data) {

?>
        <div class="col-lg-4 mt-3 mb-4">
            <div class="card">
                <!-- <form action="<?= base_url('News/baca'); ?>" method="post"> -->
                <img class="card-img-top" src="<?= $data["urlToImage"]; ?>" height="200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $data["title"]; ?></h5>
                    <p class="card-text"><?= $data["description"]; ?></p>
                    <p class="card-text"><small class="text-muted"><?= $data['publishedAt']; ?></small></p>
                    <input class="card-text" type="hidden" name="berita" value="<?= $data['url']; ?>"></input>
                    <!-- <button type="submit" class="btn btn-dark">Baca</button> -->
                    <a class="btn btn-dark" href=" <?= $data["url"]; ?>">Baca</a>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <?php } ?>
    </div>
</div>