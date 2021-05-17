<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>detail page</title>
</head>

<body>

    <div class="container" style="margin-right: center; margin-top:60px;">
        <div class="row">
            <div class="col-lg-6 mr-3">
                <div class="card">
                    <img class="card-img-top" src="<?= $list_movie["Poster"]; ?>" height="500" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?= $list_movie["Title"]; ?></h4>
                        <h5 class="card-title"><?= $list_movie["Year"]; ?></h5>
                        <h6 class="card-title">Released : <?= $list_movie["Released"]; ?></h6>
                        <h6 class="card-title">Country : <?= $list_movie["Country"]; ?></h6>
                        <h6 class="card-title">Language : <?= $list_movie["Language"]; ?></h6>
                        <h6 class="card-title">Actors : <?= $list_movie["Actors"]; ?></h6>
                        <p class="card-title">Plot : <?= $list_movie["Plot"]; ?></p>
                        <a href="<?= base_url('movie')?>" class="btn btn-dark" data-dismiss="modal">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>