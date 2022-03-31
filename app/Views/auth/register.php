<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <span class="name text-info">SMK<span class="text-secondary">antin</span></a>
    </div>
</nav>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center ">

        <div class="col-md-5 mt-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row bg-dark">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white mb-4">Register</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <label for="Username " class="text-white">Nama</label>
                                        <input type="text" class="form-control form-control-user bg-secondary" id="exampleInputname" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username " class="text-white">Email</label>
                                        <input type="email" class="form-control form-control-user bg-secondary" id="exampleInputemail" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username " class="text-white">Username</label>
                                        <input type="text" class="form-control form-control-user bg-secondary" id="exampleInputusername" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password " class="text-white">Password</label>
                                        <input type="password" class="form-control form-control-user bg-secondary" id="exampleInputPassword">
                                    </div>

                                    <a href="" class="btn btn-info btn-user btn-block">
                                        Submit
                                    </a>

                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="">Have An login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endsection(); ?>