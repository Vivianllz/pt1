<?php
ob_start();
?>

<div style="min-height: 95vh; 
    background: #f8f9fa;
    margin: -1rem;
    border-radius: 1rem; 
    padding: 2rem;">

<div class="text-center" style="margin-top: 10vh;">
    <h1 style="font-size: 5rem; font-weight: bold;">Keycap Store</h1>
    <p style="color: #6c757d; font-size: 1.4rem; margin-top: 2rem;">Welcome to the best custom gaming keycap shop</p>
    <p style="color: #6c757d; font-size: 1.1rem;">
        Welcome to Keycap Store, your one-stop shop for custom gaming keycaps. 
        We offer premium PBT and ABS keycaps in every profile you love — OEM, Cherry, SA and DSA — 
        from top brands like Keychron, Ducky, Akko and Gateron. 
        Whether you are building your first custom keyboard or upgrading your current setup, 
        we have the perfect keycaps to match your style.
    </p>
</div>

<div class="row g-4 mt-5" style="padding: 0 5rem;">
    <div class="col-md-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center">
                <i class="bi bi-box-seam text-primary" style="font-size: 3rem;"></i>
                <h5 class="mt-3 mb-0 text-primary" style="white-space: nowrap;">Products</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center">
                <i class="bi bi-people text-success" style="font-size: 3rem;"></i>
                <h5 class="mt-3 mb-0 text-success" style="white-space: nowrap;">Customers</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center">
                <i class="bi bi-person-badge text-warning" style="font-size: 3rem;"></i>
                <h5 class="mt-3 mb-0 text-warning" style="white-space: nowrap;">Staffs</h5>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card p-4 h-100 text-center">
                <i class="bi bi-receipt text-danger" style="font-size: 3rem;"></i>
                <h5 class="mt-3 mb-0 text-danger" style="white-space: nowrap;">Orders</h5>
            </div>
        </a>
    </div>
</div>

<div class="mt-5" style="padding: 0 5rem;">
    <img src="keyboard.jpg" style="width: 100%; height: 350px; object-fit: cover; border-radius: 1rem;">
</div>

<div class="row g-4 mt-4" style="padding: 0 5rem;">
    <div class="col-md-4">
        <div class="card h-100 p-4 text-center">
            <i class="bi bi-stars text-warning" style="font-size: 2rem;"></i>
            <h5 class="mt-3">High Quality</h5>
            <p class="text-muted">PBT / ABS / POM materials available</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4 text-center">
            <i class="bi bi-palette text-danger" style="font-size: 2rem;"></i>
            <h5 class="mt-3">Many Profiles</h5>
            <p class="text-muted">OEM / Cherry / SA / DSA all available</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4 text-center">
            <i class="bi bi-truck text-success" style="font-size: 2rem;"></i>
            <h5 class="mt-3">Fast Shipping</h5>
            <p class="text-muted">Orders processed same day, worldwide delivery</p>
        </div>
    </div>
</div>

<div class="mt-5 mb-5" style="padding: 0 5rem;">
    <div class="card p-4">
        <h3 class="mb-3">Why Choose Us?</h3>
        <p class="text-muted" style="text-align: left;">
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
