<div class="contenedor-cat">
    <nav class="jmenu">
        <label for="btn-cat" class="jm-icon-menu jm-menu-btn">Categorias </label>
        <input type="checkbox" id="btn-cat" class="jm-menu-btn" checked>
        <ul class="jm-collapse">
            <?php foreach ($categorias as $cat) : ?>
                <li>
                    <?php echo $this->Html->link(
                            $cat['Categoria']['nombre'],
                            array('controller' => 'categorias', 'action' => 'index', $cat['Categoria']['id'])
                        ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>