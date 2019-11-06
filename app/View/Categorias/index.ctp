<?php echo $this->Html->css('categoria', array('inline' => false));
echo $this->element('menucategorias', array('categorias' => $categorias)) ?>
<div class="productos">
    <section id="destacados">
        <div class="contenedor">
            <h3><?= $categoria['Categoria']['nombre'] ?></h3>

            <?php foreach ($categoria['Producto'] as $producto) : ?>
                <article class="producto">
                    <div class="img-wrapper">
                        <img src="data:image/jpg;base64,<?= base64_encode($producto['imagen']) ?>" alt="<?= $producto['nombre'] ?>">
                    </div>
                    <?= $this->Html->link(
                            '<h4>' . $producto['nombre'] . '</h4>',
                            array('controller' => 'productos', 'action' => 'show', $producto['id']),
                            array('escape' => false)
                        ) ?>
                    <p class="User">S/.<?= $producto['preciounitario'] ?>.00</p>

                    <label class="icon-estrella"></label>4.8
                    <p class="ventas">50 vendidos</p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</div>