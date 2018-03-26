<footer class="site-footer">
            <div class="contenedor clearfix">
                <div class="footer-informacion">
                    <h3>Sobre <span>gdlwebcamp</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur delectus atque perferendis esse placeat labore harum, ad! Recusandae cumque asperiores hic dolore illum, voluptas provident ut, harum at, deleniti adipisci!</p>
                </div>
                <div class="ultimos-tweets">
                    <h3>Últimos <span>tweets</span></h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatum nemo ea facilis accusamus, libero maiores rem reiciendis omnis, ducimus, ullam rerum sint.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatum nemo ea facilis accusamus, libero maiores rem reiciendis omnis, ducimus, ullam rerum sint.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatum nemo ea facilis accusamus, libero maiores rem reiciendis omnis, ducimus, ullam rerum sint.</li>
                    </ul>
                </div>
                <div class="menu">
                    <h3>Redes <span>sociales</span></h3>
                    <nav class="redes-sociales">
                         <a href="#"><i class="fab fa-facebook-square"></i></a>
                         <a href="#"><i class="fab fa-twitter-square"></i></a>
                         <a href="#"><i class="fab fa-pinterest-square"></i></a>
                         <a href="#"><i class="fab fa-youtube-square"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                </div>
            </div>
            <p class="copyright">Todos los derechos Reservados GDLWEBCAMP 2016.</p>
        </footer>
		<!--<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us12.list-manage.com","uuid":"ae783be20e788d6d6025f2a52","lid":"d701da6124"}) })</script>-->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB00qFumqfLwcpGgMQmcY83FW43zUXH6HE&callback=initMap"
    async defer></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <?php 
		$archivo = basename($_SERVER['PHP_SELF']);
		$pagina = str_replace(".php", "", $archivo);
		if($pagina=='invitados'||$pagina=='index'){
			echo '<script src="js/jquery.colorbox-min.js"></script>';
		}else if($pagina=='conferencia') {
			echo '<script src="js/lightbox.js"></script>';
		}
	?>
    
    
    </body>
</html>