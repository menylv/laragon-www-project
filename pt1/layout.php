<?php include 'header.php'; ?>

<div class="container-fluid p-0 min-vh-100">
    <div class="row g-0 min-vh-100">

        <?php include 'sidebar.php'; ?>

        <div class="col bg-light">
            <!-- Main content -->
            <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
                <a href="#" class="text-white text-decoration-none"
                   data-bs-toggle="offcanvas"
                   data-bs-target="#mySidebar">
                    <i class="bi bi-list"></i>
                    <h5 class="ms-3 d-inline">My Company</h5>
                </a>
            </div>

            <div class="p-4">
                <?= $content ?? '' ?>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>