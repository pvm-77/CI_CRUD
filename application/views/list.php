<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    // echo '<pre>';
    // print_r($key);

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CRUD APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>


            </ul>

        </div>
    </nav>
    <div class="container mb-2 mt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                <div class="col-6">
                <h3 class="text-right">view users</h3>
            </div>
            <div class="col-6">
                <a href="<?php echo base_url().'index.php/user/create' ;?>" class="btn btn-primary">create user</a>
            </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-8">
            <table class="table table-bordered  table-dark table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>

                </thead>

                <?php
                foreach ($key as $data) { ?>

                    <tbody>
                        <tr>
                            <th scope="row"><?= $data['id']; ?></th>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><button class="btn btn-primary"> edit</button></td>
                            <td><button class="btn btn-danger"><img src="assests/icons/trash.svg"> del</button></td>

                        </tr>

                    </tbody>

                <?php }

                ?>


            </table>

        </div>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>