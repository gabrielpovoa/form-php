<?php
if (isset($_GET['logout'])) {
    logOutProfile();
}
?>

<nav>
    <ul>
        <?php  if(isset($_SESSION['name'])): ?>
            <a href="./home.php">
                <li>Home</li>
            </a>
        <?php endif; ?>

        <a href="./profile.php">
            <li>Profile</li>
        </a>
        <a href="?logout=true">
            <li>Log out</li>
        </a>
    </ul>
</nav>