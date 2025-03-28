<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ecommerce";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    ?>
    <nav style='background-color: #000;'>
        <div style="display:flex; 
        align-items: center;
        max-width: 80em;
        margin: 0 auto;
        justify-content: space-between; 
        height: 6.2em; 
        padding: 0 4em; gap: 1rem; 
        border-bottom: 1px solid rgba(255,255,255,0.1); ">

            <div>
                <a href="index.php" style='overflow:hidden;'>
                    <!-- <img src="images/formula1-logo.png" alt="f1 logo" -->
                    <img src="images/f1logo.svg" alt="f1 logo" style="object-fit: cover; height: 5rem; width: 100%;">
                </a>
            </div>
            <div style='display:flex; gap: 2rem; '>
            <a href="/ecommerce/wishlist_view.php"
                    style=' font-size:1.5rem; font-family:monospace; color: white; text-decoration: none;'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-heart">
                        <path
                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                    </svg>
                </a>
                
                <a href="/ecommerce/cart_view.php"
                    style=' font-size:1.5rem; font-family:monospace; color: white; text-decoration: none; '>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-shopping-bag">
                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                        <path d="M3 6h18" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                </a>

                <a href="/ecommerce/dashboard.php"
                    style=' font-size:1.5rem; font-family:monospace; color: white; text-decoration: none; '>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-circle-user">
                        <circle cx="12" cy="12" r="10" />
                        <circle cx="12" cy="10" r="3" />
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
    <?php
}
?>