<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Rukun Islam</h1>
                                </div>
                                <div>
                                    <p>
                                        1. Syahadat <br>
                                        2. Shalat <br>
                                        3. Puasa <br>
                                        4. Zakat <br>
                                        5. Naik Haji</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>