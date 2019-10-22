<!DOCTYPE html>

<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
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
    <?php
    $options = array(
        'type' => 'submit',
        'class' => 'btn',
        'label' => 'Iniciar Sesión'
    );
    echo $this->Form->create('Login', array(
            'url'=>array('controller'=>'pages','action'=>'home'), 'type' => 'get'));
    echo $this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store', 'class' => 'img'));
    ?>
    <h1>Iniciar Sesión</h1>
    <?php
    echo $this->Form->input('', array('label' => false,
        'before' => '<i class="fas fa-user"></i>',
        'type' => 'text',
        'placeholder' => 'Usuario',
        'div' => array(
            'class' => 'textbox'
        ),
    ));
    echo $this->Form->input('', array(
        'label' => false,
        'before' => '<i class="fas fa-lock"></i>',
        'type' => 'password',
        'placeholder' => 'Contraseña',
        'div' => array(
            'class' => 'textbox'
        )
    ));
    echo $this->Form->end($options);
    ?>
</div>
</body>

</html>