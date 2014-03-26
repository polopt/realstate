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
<div id="property_list" class="container">
    <div id="title-listing" class="container"></div>
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



<!--    <div class="container carousel-wrapper">-->
<!--        <div id="recent-title-listing" class="container">-->
<!--            <div class="recent-property-list-title">--><?//=__("Artigos")?><!--</div>-->
<!--            <div class="recent-property-list-by">-->
<!--                <div class="jcarousel-control">-->
<!--                    <a href="#" class="jcarousel-control-prev">-->
<!--									<span class="icon-stack">-->
<!--									  <i class="icon-stop icon-stack-base"></i>-->
<!--									  <i class="icon-chevron-left"></i>-->
<!--									</span>-->
<!--                    </a>-->
<!--                    <a href="#" class="jcarousel-control-next">-->
<!--									<span class="icon-stack">-->
<!--									  <i class="icon-stop icon-stack-base"></i>-->
<!--									  <i class="icon-chevron-right"></i>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- /#title-listing -->
<!--        <div class="jcarousel container">-->
<!--            <div class="jcontainer">-->
<!--                <div class="span3">-->
<!--                    <article class="property-item">-->
<!--                        <div class="property-images">-->
<!--                            <a href="property/detail" title=""><img width="540"-->
<!--                                                                                                 height="360"-->
<!--                                                                                                 src="uploads/dummy-540x360.png"-->
<!--                                                                                                 class="status-35 wp-post-image"-->
<!--                                                                                                 alt=""-->
<!--                                                                                                 title=""/></a>-->
<!---->
<!--                            <div class="property-status status-35-text">On Sale</div>-->
<!--                        </div>-->
<!--                        <!-- /.property-images -->
<!--                        <div class="property-attribute">-->
<!--                            <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL">Florida-->
<!--                                    5, Pinecrest, FL</a><i class="icon-heart"></i></h3>-->
<!--                            <span class="attribute-city">Miami</span>-->
<!---->
<!--                            <div class="attribute-price">-->
<!--                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="property-meta clearfix">-->
<!--                            <div class="meta-size meta-block"><i class="ico-size"></i><span-->
<!--                                    class="meta-text">240M</span></div>-->
<!--                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span-->
<!--                                    class="meta-text">3</span></div>-->
<!--                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span-->
<!--                                    class="meta-text">5</span></div>-->
<!--                        </div>-->
<!--                    </article>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- jcontainer -->
<!--        </div>-->
        <!-- /.jcarousel -->
<!--    </div>-->
    <!-- /.container -->
</div>
<?//new View("home/blog"); ?>
<? if(isset($show_partners) && !is_null($show_partners) && $show_partners == true) : ?>
<?=$partners ?>
<? endif; ?>
</div><!-- /.content-wrapper -->
