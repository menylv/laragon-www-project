
<?php
ob_start();
?>

<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center text-center">

   <div class="mb-3">
    <img src="././petcarry-logo-cartoon.png"
         alt="PetCarry Logo"
         width="180"
         class="img-fluid">
    </div>

   
    <h2 class="mb-2">PetCarry</h2>

    <p class="text-muted mb-4">
        Welcome to the pet carrier backpack management system of PetCarry
    </p>

    
    <div class="col-11 col-md-8 col-lg-6 mx-auto mb-4">

    <div id="petCarryCarousel" class="carousel slide" data-bs-ride="carousel">

      
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#petCarryCarousel"
                data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#petCarryCarousel"
                data-bs-slide-to="1" aria-label="Slide 2"></button>

            <button type="button" data-bs-target="#petCarryCarousel"
                data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

       
        <div class="carousel-inner rounded">

            <div class="carousel-item active">
                <img src="././bubblecarrier-pink.jpg"
                    class="d-block w-100"
                    style="height: 350px; object-fit: cover;"
                    alt="Bubble Pet Carrier">
            </div>

            <div class="carousel-item">
                <img src="././meshcarrier-pink.jpg"
                    class="d-block w-100"
                    style="height: 350px; object-fit: cover;"
                    alt="Mesh Pet Carrier">
            </div>

            <div class="carousel-item">
                <img src="././expandablecarrier-pink.jpg"
                    class="d-block w-100"
                    style="height: 350px; object-fit: cover;"
                    alt="Expandable Pet Carrier">
            </div>

        </div>

       
        <button class="carousel-control-prev" type="button"
            data-bs-target="#petCarryCarousel" data-bs-slide="prev">

            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"
                aria-hidden="true"></span>

            <span class="visually-hidden">Previous</span>
        </button>

        
        <button class="carousel-control-next" type="button"
            data-bs-target="#petCarryCarousel" data-bs-slide="next">

            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"
                aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>
        </button>

    </div>

</div>

  
    <h5 class="mb-2">Carry Your Pets, Carry Your Love!</h5>

    <p class="text-muted">
        Making every journey with your furry friends more comfortable.
    </p>

    <a href="products.php" class="btn btn-primary mt-2">
        <i class="bi bi-bag-heart me-1"></i>
        Explore Our Products
    </a>

</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
