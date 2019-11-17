<?php echo $this->Html->css('destacados_responsive', array('inline' => false)); ?>
<?php echo $this->Html->css('estilo_responsive', array('inline' => false)); ?>

<section id="destacados" style="min-height:500px">
    <div class="contenedor">
        <h3>Resultados para "<?php echo $query ?>"</h3>

        <?php if (empty($disenios) || empty($query)) : ?>
            <center>
            <p>No se encontraron coincidencias</p>
            </center>
        <?php else : ?>
            <?php foreach ($disenios as $disenio) : ?>
                <article class="producto">
                    <div class="img-wrapper">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($disenio['Disenio']['imagen']) ?>" alt="<?php echo $disenio['Disenio']['descripcion'] ?>">
                    </div>
                    <?php echo $this->Html->link(
                                '<h4>' . $disenio['Disenio']['descripcion'] . '</h4>',
                                array('controller' => 'disenios', 'action' => 'show', $disenio['Disenio']['id']),
                                array('escape' => false)
                            ); ?>
                    <p class="User"><?php echo $disenio['User']['username']; ?></p>
                    <label class="icon-estrella"></label>4.8
                    <p class="ventas">50 vendidos</p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>