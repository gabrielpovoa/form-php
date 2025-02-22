

<header>
        <?php if(isset($_SESSION['name'])): ?>
                <a href="./home.php" class="box-logo">
                Write
                <span class="logo-item">📝</span>
                </a>
        <?php endif; ?>

        <?php if(!isset($_SESSION['name'])): ?>
                <a href="#" class="box-logo">
                Write
                <span class="logo-item">📝</span>
                </a>
        <?php endif; ?>
        
        <?php if(isset( $_SESSION['name'])): ?>
                <?php include_once 'partials/navMenu.php'; ?>
        <?php endif; ?>
</header>

