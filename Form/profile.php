<?php
session_start();

require 'partials/head.php';
require 'functions.php';

$sessionData = checkSession();
$name = $sessionData['name'];
$email = $sessionData['email'];
$password = $sessionData['password'];
$newsletter = $sessionData['newsletter'];
?>

<?php require 'partials/header.php'; ?>

<div class="profile-container">
    <!-- Avatar com as iniciais -->
    <div class="pre-profile-avatar">
        <section class="profile-avatar">
            <?php echo getInitialLettersName($name); ?>
        </section>
    </div>
    
    <article class="profile-card">
        <section class="profile-info">
            <h2>Perfil de <?= ucwords($name) ?></h2>

            <div class="field">
                <span class="label">Nome:</span>
                <p><?= ucwords($name) ?></p>
            </div>

            <div class="field">
                <span class="label">E-mail:</span>
                <p><?= $email ?></p>
            </div>

            <div class="field">
                <span class="label">Senha:</span>
                <p><?= $password = str_repeat('*', strlen($_SESSION['password']));; // echo($password) ?></p>
            </div>

            <div class="field">
                <span class="label">Deseja receber newsletters?</span>
                <p><?= ($newsletter === 'on') ? 'Sim' : 'Não'; ?></p>
            </div>

            <button class="button" disabled="true">Salvar Alterações</button>
        </section>
    </article>
</div>
<?php require 'partials/footer.php'; ?>
