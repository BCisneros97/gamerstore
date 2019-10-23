<div class="contenedor-cat">
    <nav class="jmenu">
        <label for="btn-cat" class="jm-icon-menu jm-menu-btn">Categorias </label>
        <input type="checkbox" id="btn-cat" class="jm-menu-btn" checked>
        <ul class="jm-collapse">
            <li><?php echo $this->Html->link('Teclado', 'categorias'); ?></li>
            <li> <?php echo $this->Html->link('Mouse', 'categoria_m'); ?></li>
            <li> <?php echo $this->Html->link('Mouse Pad', 'categoria_mp'); ?></li>
            <li> <?php echo $this->Html->link('Joysticks', 'categoria_j'); ?></li>
            <li> <?php echo $this->Html->link('Juegos', 'categoria_pj'); ?></li>
            <li> <?php echo $this->Html->link('Protector para Celulares', 'categoria_pc'); ?></li>
        </ul>
    </nav>

</div>