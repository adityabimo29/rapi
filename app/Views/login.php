<?=$this->extend('template')?>

<?=$this->section('content')?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 py-4">
                <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                        <img src="https://cakephp.org/img/cake-logo.svg" alt="">
                    </a>
                </div>
                <div class="cd-table-container">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your username &amp; password to login</p>
                    </div>
                    <form action="">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button class="button-second" role="button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?=$this->endSection()?>