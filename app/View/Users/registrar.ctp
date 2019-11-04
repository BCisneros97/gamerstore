<?php
echo $this->Form->create('User', array(
    'url' => array('controller' => 'users', 'action' => 'registrar'), 'type' => 'post'
));
echo $this->Html->image('gamer-store-logo.png', array('alt' => 'Logo Gamer Store', 'class' => 'img'));
?>
<h1>Registrarse</h1>
<?php
echo $this->Form->input('nombre', array(
    'label' => false,
    'before' => '<i class="fas fa-user"></i>',
    'type' => 'text',
    'placeholder' => 'Nombre de usuario',
    'div' => array(
        'class' => 'textbox'
    ),
));
echo $this->Form->input('email', array(
    'label' => false,
    'before' => '<i class="fas fa-envelope"></i>',
    'type' => 'email',
    'placeholder' => 'Email',
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
?>
<div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" id="ConfirmacionPassword" placeholder="Repetir contraseña" required>
</div>
<div class="textbox">
    <i class="fas fa-venus-mars"></i>
    <select name="data[Cliente][sexo]" id="ClienteSexo" required>
        <option disabled selected>Género</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
</div>

<?php
$options = array(
    'type' => 'submit',
    'class' => 'btn',
    'label' => 'Registrar'
);
echo $this->Form->end($options);
?>