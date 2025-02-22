<?php session_start(); ?>
<form action="formReceiver.php" method="POST">
    <div class="error">
        <?php if (isset($_SESSION['error'])): ?>
            <span><?= $_SESSION['error'] ?></span>
        <?php endif ?>
    </div>
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email">

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password">

    <label for="newsletter">
        <input type="checkbox" id="newsletter" name="newsletter">
        Desejo receber newsletters
    </label>

    <button type="submit" name="submit">Enviar</button>
</form>
