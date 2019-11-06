<?php $this->layout = 'login'; ?>

<?php
echo $this->Form->create('User', array(
    'url' => array('controller' => 'users', 'action' => 'login'),
    'type' => 'post'
));
echo $this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store', 'class' => 'img'));
?>
<h1>Iniciar Sesión</h1>
<?php
echo $this->Form->input('username', array(
    'label' => false,
    'before' => '<i class="fas fa-user"></i>',
    'type' => 'text',
    'placeholder' => 'Usuario',
    'div' => array(
        'class' => 'textbox'
    ),
));
echo $this->Form->input('password', array(
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
echo $this->Html->link(
    '<button class="btn">Regístrate</button>',
    array('controller'=>'users', 'action'=>'registrar'),
    array('escape'=>false)
);
?>