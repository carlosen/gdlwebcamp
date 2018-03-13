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
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fa fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fa fa-clock"></i>16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Juan Pablo de la Torre</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Desing</h3>
                            <p><i class="fa fa-clock"></i>20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Juan Pablo de la Torre</p>
                        </div>
                        <a href="#" class="button float-rigth">Ver todos</a>
                    </div><!--.talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Susana Sanchez</p>
                        </div>
                        <a href="#" class="button float-rigth">Ver todos</a>
                    </div><!--.conferencias-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para moviles</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i>Harold Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i>Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-rigth">Ver todos</a>
                    </div><!--.seminarios-->
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