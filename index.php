<?php include_once 'includes/templates/header.php'; ?>
        <section class="seccion contenedor">
            <h2>La mejor conferencia de diseño web en español</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam temporibus aperiam mollitia nostrum saepe quibusdam voluptatum veniam animi repellat soluta ex sunt quia provident dignissimos id, repudiandae nam dolore iusto. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odio quas architecto, voluptas a quibusdam nulla nemo, inventore quia. Autem assumenda iusto nemo doloribus velit, odio dolores commodi nihil at.</p>
        </section><!--.seccion-->
        <section class="programa">
            <div class="contenedor-video">
                 <video autoplay loop poster="img/bg-talleres.jpg">
                     <source src="video/video.mp4" type="video/mp4">
                     <source src="video/video.webm" type="video/webm">
                     <source src="video/video.ogg" type="video/ogg">
                 </video> 
            </div><!--.contenedor-video-->
            <div class="contenido-programa">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <?php 
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT * FROM categoria_evento"; 
                            $resultado = $conn->query($sql);
                        }catch(Exception $e){
                            $error = $e->getMessage();
                        }
                    ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){?>
                            <a href="<?php echo strtolower($cat['cat_evento'])?>"><i class="<?php echo $cat['icono']?>"></i><?php echo $cat['cat_evento']?></a>
                        <?php }?>
                    </nav>
                    <?php
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                            $sql .= "FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cat_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_inv=invitados.invitado_id ";
                            $sql .= "AND evento.id_cat_evento = 1 ";
                            $sql .= "ORDER BY evento_id LIMIT 2;";
                            $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                            $sql .= "FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cat_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_inv=invitados.invitado_id ";
                            $sql .= "AND evento.id_cat_evento = 2 ";
                            $sql .= "ORDER BY evento_id LIMIT 2;";
                            $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                            $sql .= "FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cat_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_inv=invitados.invitado_id ";
                            $sql .= "AND evento.id_cat_evento = 3 ";
                            $sql .= "ORDER BY evento_id LIMIT 2; ";
                        }catch(Exception $e){
                            $error = $e->getMessage();
                        }
                        $conn->multi_query($sql);
                    ?>
                    <?php 
                        do{
                            $resultado = $conn->store_result();
                            $row = $resultado->fetch_all(MYSQLI_ASSOC);
                    ?>
                    <?php $i = 0?>
                    <?php foreach($row as $evento):?>
                        <?php if($i % 2 == 0) { ?>
                            <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar clearfix">
                        <?php } ?>
                                <div class="detalle-evento">
                                    <h3><?php echo utf8_encode($evento['nombre_evento'])?></h3>
                                    <p><i class="fa fa-clock"></i><?php echo utf8_encode($evento['hora_evento'])?></p>
                                    <p><i class="fa fa-calendar"></i><?php echo utf8_encode($evento['fecha_evento'])?></p>
                                    <p><i class="fa fa-user"></i><?php echo utf8_encode($evento['nombre_invitado'])?></p>
                                </div>
                        <?php if($i % 2 == 1):?>       
                            <a href="calendario.php" class="button float-rigth">Ver todos</a>
                            </div><!--.talleres-->
                        <?php endif; ?>
                    <?php $i++; ?>
                    <?php endforeach;?>
                    <?php $resultado->free();?>
                    <?php
                        }while($conn->more_results() && $conn->next_result());
                    ?>
                </div><!--.programa-evento-->
            </div><!--.contenido-programa-->
        </section><!--.programa-->
        <?php include_once 'includes/templates/invitados.php'; ?>
        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero">0</p>Invitados</li>
                    <li><p class="numero">0</p>Talleres</li>
                    <li><p class="numero">0</p>Días</li>
                    <li><p class="numero">0</p>Conferencias</li>
                </ul>
            </div>
        </div><!--.contador-->
        <section class="precios seccion">
            <h2>Precios</h2>
            <div class="contenedor">
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por día</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <a href="" class="button hollow">Comprar </a>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Todos los días</h3>
                            <p class="numero">$50</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <a href="" class="button">Comprar</a>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por dos días</h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <a href="" class="button hollow">Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section><!--.precios-->
        <div id="mapa" class="mapa"></div>
        
        <section class="seccion">
            <h2>Testimoniales</h2>
            <div class="testimoniales contenedor clearfix">
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet non incidunt ut blanditiis explicabo assumenda, soluta consequuntur veniam recusandae eligendi debitis delectus, mollitia quos accusantium distinctio ipsum ullam ab. Rerum?</p>
                        <footer class="info-testimonial clearfix">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                        </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet non incidunt ut blanditiis explicabo assumenda, soluta consequuntur veniam recusandae eligendi debitis delectus, mollitia quos accusantium distinctio ipsum ullam ab. Rerum?</p>
                        <footer class="info-testimonial clearfix">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                        </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet non incidunt ut blanditiis explicabo assumenda, soluta consequuntur veniam recusandae eligendi debitis delectus, mollitia quos accusantium distinctio ipsum ullam ab. Rerum?</p>
                        <footer class="info-testimonial clearfix">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                        </footer>
                    </blockquote>
                </div><!--.testimonial-->
            </div>
        </section>
        
        <div class="newsletter parallax">
            <div class="contenido contenedor">
                <p>regístrate al newsletter:</p>
                <h3>gdlwebcamp</h3>
                <a href="#" class="button transparente">Registro</a>
            </div><!--..contenido-->
        </div>
        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p class="numero" id="dias"></p>días</li>
                    <li><p class="numero" id="horas"></p>horas</li>
                    <li><p class="numero" id="minutos"></p>minutos</li>
                    <li><p class="numero" id="segundos"></p>segundos</li>
                </ul>
            </div><!--.cuenta-regresiva -->
        </section>
<?php include_once 'includes/templates/footer.php'; ?>