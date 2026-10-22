<?php
ob_start();
?>
<div style="min-height: 95vh; 
    background: radial-gradient(ellipse at center, #192d4b 0%, #050a14 100%);
    margin: -1rem;
    border-radius: 1rem; 
    padding: 2rem; 
    color: white;">

<!-- Welcome -->
<div class="text-center" style="margin-top: 10vh;">
    <h1 style="font-size: 5rem; font-weight: bold; text-shadow: 0 0 30px #0d6efd;">Keycap Store</h1>
    <p style="color: #8ab4f8; font-size: 1.4rem; margin-top: 2rem;">Welcome to the best custom gaming keycap shop</p>
    <p style="color: #8ab4f8; font-size: 1.1rem; max-width: 700px; margin: 2rem auto 0;">
    We believe every keystroke should feel and look amazing. 
    That is why we carefully curate every keycap in our store — 
    tested for durability, sound and feel, so you can game and type with confidence. 
    Join thousands of happy customers who trust us for their keyboard upgrades.
    </p>


<!-- Menu Cards -->
<div class="row g-4 mt-5" style="padding: 0 5rem;">
    <div class="col-md-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center" style="background: rgba(13, 110, 253, 0.1); border: 1px solid #0d6efd; box-shadow: 0 0 20px rgba(13, 110, 253, 0.3); backdrop-filter: blur(10px);">
                <i class="bi bi-box-seam" style="font-size: 3rem; color: #0d6efd; text-shadow: 0 0 10px #0d6efd;"></i>
                <h5 class="mt-3 mb-0" style="color: #0d6efd;">Products</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center" style="background: rgba(25, 135, 84, 0.1); border: 1px solid #198754; box-shadow: 0 0 20px rgba(25, 135, 84, 0.3); backdrop-filter: blur(10px);">
                <i class="bi bi-people" style="font-size: 3rem; color: #198754; text-shadow: 0 0 10px #198754;"></i>
                <h5 class="mt-3 mb-0" style="color: #198754;">Customers</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center" style="background: rgba(255, 193, 7, 0.1); border: 1px solid #ffc107; box-shadow: 0 0 20px rgba(255, 193, 7, 0.3); backdrop-filter: blur(10px);">
                <i class="bi bi-person-badge" style="font-size: 3rem; color: #ffc107; text-shadow: 0 0 10px #ffc107;"></i>
                <h5 class="mt-3 mb-0" style="color: #ffc107;">Staffs</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center" style="background: rgba(220, 53, 69, 0.1); border: 1px solid #dc3545; box-shadow: 0 0 20px rgba(220, 53, 69, 0.3); backdrop-filter: blur(10px);">
                <i class="bi bi-receipt" style="font-size: 3rem; color: #dc3545; text-shadow: 0 0 10px #dc3545;"></i>
                <h5 class="mt-3 mb-0" style="color: #dc3545;">Orders</h5>
            </div>
        </a>
    </div>
</div>

<!-- Banner Image -->
<div class="mt-5" style="padding: 0 5rem;">
    <img src="keyboard.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 1rem; box-shadow: 0 0 30px rgba(13, 110, 253, 0.3);">
</div>

<!-- Features -->
<div class="row g-4 mt-4" style="padding: 0 5rem;">
    <div class="col-md-4">
        <div class="h-100" style="background: rgba(255,255,255,0.05); border-radius: 1rem; padding: 2rem; text-align: center; border: 1px solid #333;">
            <i class="bi bi-stars" style="font-size: 2rem; color: #ffc107;"></i>
            <h5 class="mt-3 text-white">High Quality</h5>
            <p style="color: #aaa;">PBT / ABS / POM materials available</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="h-100" style="background: rgba(255,255,255,0.05); border-radius: 1rem; padding: 2rem; text-align: center; border: 1px solid #333;">
            <i class="bi bi-palette" style="font-size: 2rem; color: #dc3545;"></i>
            <h5 class="mt-3 text-white">Many Profiles</h5>
            <p style="color: #aaa;">OEM / Cherry / SA / DSA all available</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="h-100" style="background: rgba(255,255,255,0.05); border-radius: 1rem; padding: 2rem; text-align: center; border: 1px solid #333;">
            <i class="bi bi-truck" style="font-size: 2rem; color: #198754;"></i>
            <h5 class="mt-3 text-white">Fast Shipping</h5>
            <p style="color: #aaa;">Orders processed same day, worldwide delivery</p>
        </div>
    </div>
</div>

<div class="mt-5 mb-5" style="padding: 0 5rem;">
    <div style="background: rgba(255,255,255,0.05); border-radius: 1rem; padding: 3rem; border: 1px solid #333;">
        <h3 class="text-white mb-3">Why Choose Us?</h3>
        <p style="color: #aaa; max-width: 1300px; margin: 0 auto; text-align: left !important;">
            At Keycap Store, we are passionate about mechanical keyboards just like you are. 
            Every product in our inventory is hand-picked and tested to ensure it meets our high standards. 
            From budget-friendly sets to premium artisan keycaps, we make it easy to find the perfect match for your keyboard. 
            Fast shipping, friendly support, and prices that make sense — that is our promise to you.
        </p>
    </div>
</div>


</div>
<?php
$content=ob_get_clean();
require_once 'layout.php';
?>
