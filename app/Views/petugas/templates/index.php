<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/petugas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FontAwesome Icon-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">


    <title><?= $title; ?></title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
          <!-- Logo -->
        </div>

        <div class="sidebar-profile">
            <ul class="flex-colum">
                <li class="nav-link">
                    <a href="" class="nav-link"><img src="<?= base_url(); ?>/img/g.png" height="75px" width="75px" class="rounded-circle" alt="Petugas name">
                    <span class="text-white ml-5"> Petugas name</span></a>
               </li>
            </ul>
        </div>

        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href=""><i class="fas fa-tachometer-alt"></i>
                    <span><?= $nav[0]; ?></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href=""><i class="fas fa-inbox"></i> 
                    <span><?= $nav[1]; ?></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-spinner"></i>
                    <span><?= $nav[2]; ?></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-check-circle"></i> 
                    <span><?= $nav[3]; ?></span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <div class="col">
            <h2><label class="mr-2" for="nav-toggle"><i class="fas fa-bars"></i></label> <span class="name text-info">SMK<span class="text-secondary">antin</span></h2>
        </div>
        <div class="col d-flex justify-content-end">


        </div>


    </div>
    
    <?= $this->renderSection('content'); ?>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>