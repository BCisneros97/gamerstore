<?php echo $this->Html->css('clientes.css', array('inline' => false)); ?>

<section id="clientes">
    <div class="contenedor">
        <h2>Listado de clientes</h2>
        <div class="cajita">
            <input type="text" id="buscador" placeholder="Buscar cliente">
        </div>
        <div class="table-wrapper">
            <table id="tabla">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Código</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombres</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>0201514020</td>
                        <td>AVILA</td>
                        <td>CAPRISTAN</td>
                        <td>LADY DIANA</td>
                        <td>
                            <?php echo $this->Html->image('clientes/diana.jpg', array('alt' => '0201514020')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0201514020</td>
                        <td>CASTILLO</td>
                        <td>GRAUS</td>
                        <td>RUBEN GIANCARLO</td>
                        <td>
                            <?php echo $this->Html->image('clientes/ruben.jpg', array('alt' => '0201514020')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0201514054</td>
                        <td>CISNEROS</td>
                        <td>BACA</td>
                        <td>BENNY LANDO</td>
                        <td>
                            <?php echo $this->Html->image('clientes/benny.jpg', array('alt' => '0201514054')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0201314055</td>
                        <td>ESCOBEDO</td>
                        <td>ROMERO</td>
                        <td>ANGEL RAMIRO</td>
                        <td>
                            <?php echo $this->Html->image('clientes/escobedo.jpg', array('alt' => '0201314055')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0201514007</td>
                        <td>JARA</td>
                        <td>ESPINOZA</td>
                        <td>JHOSELIN SHIRLEY</td>
                        <td>
                            <?php echo $this->Html->image('clientes/jhosselyn.jpg', array('alt' => '0201514007')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>0201514002</td>
                        <td>JUSTINO</td>
                        <td>CAPA</td>
                        <td>ABNER PERCY</td>
                        <td>
                            <?php echo $this->Html->image('clientes/percy.jpg', array('alt' => '0201514002')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>0201514049</td>
                        <td>LARA</td>
                        <td>SOTO</td>
                        <td>JHONATAN JAMHES</td>
                        <td>
                            <?php echo $this->Html->image('clientes/jhon.jpg', array('alt' => '0201514049')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>0201514037</td>
                        <td>LÓPEZ</td>
                        <td>ZAPATA</td>
                        <td>FRANCISCO</td>
                        <td>
                            <?php echo $this->Html->image('clientes/pancho.jpg', array('alt' => '0201514037')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>0201514060</td>
                        <td>PASIÓN</td>
                        <td>RODRÍGUEZ</td>
                        <td>KAROLAY ELVIRA</td>
                        <td>
                            <?php echo $this->Html->image('clientes/karolay.jpg', array('alt' => '0201514060')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>0201514004</td>
                        <td>REYES</td>
                        <td>AVALOS</td>
                        <td>DEIVY OSKAR'S</td>
                        <td>
                            <?php echo $this->Html->image('clientes/deivy.jpg', array('alt' => '0201514004')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>0201514014</td>
                        <td>VALVERDE</td>
                        <td>SOLIS</td>
                        <td>JOSUE ABRAHAM</td>
                        <td>
                            <?php echo $this->Html->image('clientes/abram.jpg', array('alt' => '0201514014')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>0201514008</td>
                        <td>VÁSQUEZ</td>
                        <td>CÁMPOS</td>
                        <td>RUBY DANITZA BETSSY</td>
                        <td>
                            <?php echo $this->Html->image('clientes/ruby.jpg', array('alt' => '0201514008')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>0201514045</td>
                        <td>VERANO</td>
                        <td>CUSTODIO</td>
                        <td>LETICIA MARIVI</td>
                        <td>
                            <?php echo $this->Html->image('clientes/leticia.jpg', array('alt' => '0201514045')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>0201214049</td>
                        <td>VIDAL</td>
                        <td>GERMÁN</td>
                        <td>CESIA GABRIELA</td>
                        <td>
                            <?php echo $this->Html->image('clientes/cesia.jpg', array('alt' => '0201214049')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>0201514017</td>
                        <td>YAIPEN</td>
                        <td>FLORES</td>
                        <td>EDWIN FILAMIR</td>
                        <td>
                            <?php echo $this->Html->image('clientes/filamir.jpg', array('alt' => '0201514017')); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php echo $this->Html->script(array('jquery-3.2.1.min.js', 'busqueda_clientes.js'), array('inline' => false)); ?>
