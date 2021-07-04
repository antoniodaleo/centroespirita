<div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">

            <!--<br /><br />-->
            <div class="row-fluid">
                <div class="span8">
                    <p class="copyright">
                        Copyright © 2021 Grupo Cristão Mãos de Luz. Desenvolvido por <a href="http://leonardolobato.pt/" target="_blank">Leonardo Lobato</a>.
                    </p>

                    <p class="social_bookmarks">
                        <a href="https://www.facebook.com/gcmaosdeluz/?fref=ts" target="_blank"><i class="social foundicon-facebook"></i> Facebook</a>
            			<a href="https://www.youtube.com/channel/UCtPG0zLO8TOVof5y_2O3vPA" target="_blank"><i class="social foundicon-youtube"></i> YouTube</a>
                        <a href="https://www.instagram.com/gc_maosdeluz/" target="_blank"><i class="social foundicon-instagram"></i> Instagram</a>
                    </p>
                    
                </div>
                <div class="span4" align="right">
                    <p>
                        <strong>ACESSOS</strong>
                    </p>
                    <p>                        
                        <div align=right><a href=''><img src='https://www.counter12.com/img-ZDzx50Wbb8z3Z208-3.gif' border='0' alt='contador de visitantes'></a><script type='text/javascript' src='https://www.counter12.com/ad.js?id=ZDzx50Wbb8z3Z208'></script></div>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="<?=base_url('assets/scripts/jquery.min.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/scripts/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/scripts/default.js')?>" type="text/javascript"></script>


<script src="<?=base_url('assets/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js')?>" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="<?=base_url('assets/scripts/camera/scripts/camera.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/scripts/easing/jquery.easing.1.3.js')?>" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


<script src="<?=base_url('assets/scripts/wookmark/js/jquery.wookmark.js')?>" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="<?=base_url('assets/scripts/yoxview/yox.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/scripts/yoxview/jquery.yoxview-2.21.js')?>" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

</body>
</html>