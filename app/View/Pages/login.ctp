<?php $this->layout = 'login'; ?>

<?php
echo $this->Form->create('Login', array(
    'url' => array('controller' => 'pages', 'action' => 'home'), 'type' => 'get'
));
echo $this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store', 'class' => 'img'));
?>
<h1>Iniciar Sesión</h1>
<?php
echo $this->Form->input('', array(
    'label' => false,
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
$options = array(
    'type' => 'submit',
    'class' => 'btn',
    'label' => 'Iniciar Sesión'
);
echo $this->Form->end($options);
?>