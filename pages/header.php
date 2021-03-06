<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="../home.php">P 2 S</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/register.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/checkout.php">Shopping Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Types of Services</a>
                        <div class="dropdown-menu">
                            <a href="../pages/ride.php" class="dropdown-item">Ride to a destination</a>
                            <a href="../pages/deliver.php" class="dropdown-item">Ride & Delivery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">MOD</a>
                        <div class="dropdown-menu">
                            <a href="../pages/addData.php" class="dropdown-item">Add to DELIVERY database</a>
                            <a href="../pages/addRideData.php" class="dropdown-item">Add to RIDE database</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form action="/php-scripts/logout_script.php">
                            <input class="btn btn-outline-secondary" type="submit" value="Logout">
                        </form>
                    </li>
                    <form method="post" class="navbar-form ml-3" role="search" action="/php-scripts/search.php">
                        <div class="form-group">
                            <input name="order_id" type="text" class="form-control" placeholder="Search by Order ID">
                        </div>
                    </form>
                </ul>
            </div>
        </div>
        </div>
    </nav>

</header>