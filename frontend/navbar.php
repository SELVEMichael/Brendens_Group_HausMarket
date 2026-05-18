<nav class="navbar">

    <div class="logo">
        HausMarket
    </div>

    <div class="nav-links">

        <a href="/Brendens_Group_HausMarket/frontend/index.php">
            Home
        </a>

        <a href="/Brendens_Group_HausMarket/frontend/products.php">
            Products
        </a>

        <?php if(isset($_SESSION['user_id'])): ?>

            <a href="/Brendens_Group_HausMarket/frontend/add_product.php">
                Sell Product
            </a>

            <a href="/Brendens_Group_HausMarket/frontend/profile.php">
                Profile
            </a>

            <a href="/Brendens_Group_HausMarket/user-service/logout.php">
                Logout
            </a>

        <?php else: ?>

            <a href="/Brendens_Group_HausMarket/frontend/login.php">
                Sign In
            </a>

            <a href="/Brendens_Group_HausMarket/frontend/register.php">
                Register
            </a>

        <?php endif; ?>

    </div>

</nav>
