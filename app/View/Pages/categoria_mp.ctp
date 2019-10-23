<?php echo $this->Html->css('categoria',array('inline'=>false));
echo $this->element('categoria')?>
            <div class="productos">
                <section id="destacados">
                    <div class="contenedor">
                        <h3>Mouse Pad</h3>

                        <article class="producto">
                            <div class="img-wrapper">
                                <?php echo  $this->Html->image('mp-1.jpg',array('alt'=>'imagen'));?>
                            </div>
                            <a href="producto">
                                <h4>Mouse Pad GoF</h4>
                            </a>

                            <p class="User">Francisco1997</p>

                            <label class="icon-estrella"></label>4.8
                            <p class="ventas">50 vendidos</p>
                        </article>


                        <article class="producto">
                            <div class="img-wrapper">
                                <?php echo  $this->Html->image('mp-3.jpg',array('alt'=>'imagen'));?>
                            </div>
                            <a href="producto">
                                <h4>Mouse Pad </h4>
                            </a>
                            <p class="User">Benny97</p>
                            <label class="icon-estrella"></label>4.3
                            <p class="ventas">62 vendidos</p>
                        </article>


                        <article class="producto">
                            <div class="img-wrapper">
                                <?php echo  $this->Html->image('mp-2.jpg',array('alt'=>'imagen'));?>

                            </div>
                            <a href="producto">
                                <h4>Mouse Pad </h4>
                            </a>
                            <p class="User">Ruben97</p>

                            <label class="icon-estrella"></label>3.8
                            <p class="ventas">78 vendidos</p>
                        </article>





                    </div>
                </section>
            </div>

        </section>

    </main>

    <footer>
        <div class="contenedor">
            <div class="creditos">
                <p>&lt;Ruben Castillo Graus&gt;</p>
                <p>&lt;Benny Cisneros Baca&gt;</p>
                <p>&lt;Francisco López Zapata&gt;</p>
            </div>
            <p class="copyright">Gamer Store &copy; 2019</p>
            <p>
                <a href="https://validator.w3.org/check?uri=referer">
                    <img style="border:0;width:88px;height:31px" src="https://www.w3.org/Icons/valid-html401"
                        alt="Valid HTML 4.01!">
                </a>
                <a
                    href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fgamerstoreperu.000webhostapp.com%2Findex.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=es">
                    <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss"
                        alt="¡CSS Válido!" />
                </a>
                <a
                    href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fgamerstoreperu.000webhostapp.com%2Findex.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=es">
                    <img style="border:0;width:88px;height:31px"
                        src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="¡CSS Válido!" />
                </a>
            </p>
        </div>
    </footer>

    <div class="social">
        <ul>
            <li> <a href="https://www.facebook.com/gamerstorechimbote" class="fab fa-facebook-f"></a></li>
            <li><a href="https://www.facebook.com/messages/t/gamerstorechimbote" class="fab fa-facebook-messenger"></a>
            </li>
            <li> <a href="https://chat.whatsapp.com/HE0480QrGXtGXR3RAzJHIE" target="_blank" class="fab fa-whatsapp"></a>
            </li>
        </ul>
    </div>
</body>

</html>