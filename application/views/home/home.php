<script type='text/javascript' src='/media/js/default.js'></script>
<script type='text/javascript' src='/media/js/jquery.form.min.js'></script>
<script type='text/javascript' src='/media/js/jpages.js'></script>
<script type='text/javascript' src='/media/library/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/media/js/jquery.jcarousel.min.js'></script>
<script type='text/javascript' src='/media/js/jquery.flexslider.js'></script>
<script type='text/javascript' src='/media/js/html5shiv.js'></script>
<script type='text/javascript' src='/media/js/jquery.placeholder.js'></script>
<script type='text/javascript' src='/media/js/jquery.selectbox.js'></script>
<script type='text/javascript' src='/media/js/map-highlight.js'></script>
<script type='text/javascript' src='/media/js/real-expert.js'></script>
<script type='text/javascript' src='/media/js/selectivizr.min.js'></script>
<script type='text/javascript' src='/media/js/respond.min.js'></script>

<div class="content-wrapper clearfix">
<?=$slider?>
<div>
<!--    <div id="title-listing" class="container"></div>-->
    <!-- /#title-listing -->
    <div class="row-fluid property-row">
<!--        --><?php //for($i=0; $i<5; $i++): ?>
            <div class="span3">
                <article class="property-item">
                    <div class="services">
                        <div class="service_logo">
                            <img src="/media/images/service_logo.jpg" />
                        </div>
                        <div class="service_content">
                            <h4>House Hunting</h4>
                            <p>Confie-nos a pesquisa do seu imóvel - procuramos no mercado a solução mais adequada aos seus requisitos. </p>
                            <p class="see_more"><a href="#"><img src="/media/images/andyou.jpg" /></a></a></p>
                        </div>
                    </div>
                </article>
            </div>
<!--        --><?php //endfor; ?>
        <div class="span3">
            <article class="property-item">
                <div class="services">
                    <div class="service_logo">
                        <img src="/media/images/service_logo.jpg" />
                    </div>
                    <div class="service_content">
                        <h3>House </h3>
                    </div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="services">
                    <div class="service_logo">
                        <img src="/media/images/service_logo.jpg" />
                    </div>
                    <div class="service_content">
                        <h3>House </h3>
                    </div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="services">
                    <div class="service_logo">
                        <img src="/media/images/service_logo.jpg" />
                    </div>
                    <div class="service_content">
                        <h3>House </h3>
                    </div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="services">
                    <div class="service_logo">
                        <img src="/media/images/service_logo.jpg" />
                    </div>
                    <div class="service_content">
                        <h3>House</h3>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<!-- /#property_list -->
<div id="property_info">
    <div class="row-fluid property-row">
        <img id="blog" src="/media/images/logo-naming.png" />
    </div>
</div>
<?//new View("home/blog"); ?>
<? if(isset($show_partners) && !is_null($show_partners) && $show_partners == true) : ?>
<?=$partners ?>
<? endif; ?>
</div><!-- /.content-wrapper -->
