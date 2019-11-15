<?php echo $this->Html->css('categoria', array('inline' => false));
echo $this->element('menucategorias', array('categorias' => $categorias)) ?>
<div class="productos">
    <section id="destacados">
        <div class="contenedor">
            <h3><?php echo $categoria['Categoria']['nombre'] ?></h3>

            <?php foreach ($disenios as $disenio) : ?>
                <article class="producto">
                    <div class="img-wrapper">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($disenio['Disenio']['imagen']) ?>" alt="<?php echo $disenio['Disenio']['descripcion'] ?>">
                    </div>
                    <?php echo $this->Html->link(
                            '<h4>' . $disenio['Disenio']['descripcion'] . '</h4>',
                            array('controller' => 'disenios', 'action' => 'show', $disenio['Disenio']['id']),
                            array('escape' => false)
                        ) ?>
                    <p class="User"><?php echo $disenio['Cliente']['User']['username'] ?></p>

                    <label class="icon-estrella"></label>4.8
                    <p class="ventas">50 vendidos</p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</div>