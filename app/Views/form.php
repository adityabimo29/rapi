<?=$this->extend('template')?>

<?=$this->section('content')?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 py-4">
                <div class="cd-table-container">
                    <h2 class="cd-title">Form Monster Size</h2>

                    <?= session()->getFlashdata('error') ?>
                    <?php if(service('validation')->listErrors()) : ?>
                    <div class="alert alert-warning"><?= service('validation')->listErrors() ?></div>
                    <?php endif; ?>
                    <form action="/monster-sizes" method="POST">
                        <?= csrf_field() ?>
                        <input type="text" name="size_title">
                        <br>
                        <button class="button-second mt-1" role="button">Add Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<?=$this->endSection()?>