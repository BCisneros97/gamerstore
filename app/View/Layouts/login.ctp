<!DOCTYPE html>

<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>Iniciar Sesión</title>
    <?php
    echo $this->Html->meta('icon', 'img/favicon.png', array('type' => 'image/png'));
    echo $this->Html->css('login.css');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
</head>

<body>
    <div class="login-box">
        <?php echo $this->fetch('content'); ?>
    </div>
</body>

</html>