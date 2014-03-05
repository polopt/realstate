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
<!--<div id="search_form" class="container">-->
<!--    <section class="advance-search">-->
<!--        <div class="as-form-wrapper">-->
<!---->
<!--        </div>-->
<!--        <!-- /.as-form-wrapper -->
<!--    </section>-->
    <!-- /.advance-search -->
<!--</div>-->
<!-- /#search_form -->
<div id="property_list" class="container">
    <div id="title-listing" class="container">
<!--        <div class="property-list-title">Featured Properties</div>-->
<!--        <div class="property-list-by">-->
<!--            <a class="current" href="#">All</a>-->
<!--            <a class="" href="#">Apartments</a>-->
<!--            <a class="" href="#">Bungalows</a>-->
<!--            <a class="" href="#">Condominium</a>-->
<!--            <a class="" href="#">Villas</a>-->
<!--        </div>-->
    </div>
    <!-- /#title-listing -->
    <div class="row-fluid property-row">

        <?php for($i=0; $i<4; $i++): ?>
            <div class="span3">
                <article class="property-item">
                    <div class="property-images">
                        <a href="property-single.html" title="Florida 5, Pinecrest, FL">
                            <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image"
                                 alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL"/></a>

                        <div class="property-status status-35-text">On Sale</div>
                    </div>
                    <!-- /.property-images -->
                    <div class="property-attribute">
                        <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL">Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                        <span class="attribute-city">Miami</span>

                        <div class="attribute-price">
                            <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                        </div>
                    </div>
                    <div class="property-meta clearfix">
                        <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
                        <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span>
                        </div>
                        <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span>
                        </div>
                    </div>
                </article>
            </div>
        <?php endfor; ?>
    </div>
<!--    <div class="row-fluid property-row">-->
<!--        <div class="span3">-->
<!--            <article class="property-item">-->
<!--                <div class="property-images">-->
<!--                    <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360"-->
<!--                                                                                             src="uploads/dummy-540x360.png"-->
<!--                                                                                             class="status-28 wp-post-image"-->
<!--                                                                                             alt="15421 Southwest 39th Terrace"-->
<!--                                                                                             title="15421 Southwest 39th Terrace"/></a>-->
<!---->
<!--                    <div class="property-status status-28-text">For Rent</div>-->
<!--                </div>-->
<!--                <!-- /.property-images -->
<!--                <div class="property-attribute">-->
<!--                    <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace">15421-->
<!--                            Southwest 39th Terrac...</a><i class="icon-heart"></i></h3>-->
<!--                    <span class="attribute-city">Miami</span>-->
<!---->
<!--                    <div class="attribute-price">-->
<!--                        <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="property-meta clearfix">-->
<!--                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>-->
<!--                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span>-->
<!--                    </div>-->
<!--                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="span3">-->
<!--            <article class="property-item">-->
<!--                <div class="property-images">-->
<!--                    <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540" height="360"-->
<!--                                                                                               src="uploads/dummy-540x360.png"-->
<!--                                                                                               class="status-35 wp-post-image"-->
<!--                                                                                               alt="700 Front Street, Key West, FL"-->
<!--                                                                                               title="700 Front Street, Key West, FL"/></a>-->
<!---->
<!--                    <div class="property-status status-35-text">On Sale</div>-->
<!--                </div>-->
<!--                <!-- /.property-images -->
<!--                <div class="property-attribute">-->
<!--                    <h3 class="attribute-title">-->
<!--                        <a href="property-single.html" title="700 Front Street, Key West, FL">700 Front Street, Key-->
<!--                            West,...</a>-->
<!--                        <i class="icon-heart"></i>-->
<!--                    </h3>-->
<!--                    <span class="attribute-city">Miami</span>-->
<!---->
<!--                    <div class="attribute-price">-->
<!--                        <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="property-meta clearfix">-->
<!--                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>-->
<!--                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span>-->
<!--                    </div>-->
<!--                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="span3">-->
<!--            <article class="property-item">-->
<!--                <div class="property-images">-->
<!--                    <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540" height="360"-->
<!--                                                                                         src="uploads/dummy-540x360.png"-->
<!--                                                                                         class="status-35 wp-post-image"-->
<!--                                                                                         alt="1903 Hollywood Boulevard"-->
<!--                                                                                         title="1903 Hollywood Boulevard"/></a>-->
<!---->
<!--                    <div class="property-status status-35-text">On Sale</div>-->
<!--                </div>-->
<!--                <!-- /.property-images -->
<!--                <div class="property-attribute">-->
<!--                    <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard">1903-->
<!--                            Hollywood Boulevard</a><i class="icon-heart"></i></h3>-->
<!--                    <span class="attribute-city">Toronto</span>-->
<!---->
<!--                    <div class="attribute-price">-->
<!--                        <span class="attr-pricing"><sup class="price-curr">$</sup>9,800</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="property-meta clearfix">-->
<!--                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">450 M</span></div>-->
<!--                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span>-->
<!--                    </div>-->
<!--                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--        </div>-->
<!--        <div class="span3">-->
<!--            <article class="property-item">-->
<!--                <div class="property-images">-->
<!--                    <a href="property-single.html" title="401 Biscayne Boulevard, Miami">-->
<!--                        <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image"-->
<!--                             alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami"/></a>-->
<!---->
<!--                    <div class="property-status status-28-text">For Rent</div>-->
<!--                </div>-->
<!--                <!-- /.property-images -->
<!--                <div class="property-attribute">-->
<!--                    <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami">401-->
<!--                            Biscayne Boulevard, Mia...</a><i class="icon-heart"></i></h3>-->
<!--                    <span class="attribute-city">Miami</span>-->
<!---->
<!--                    <div class="attribute-price">-->
<!--                        <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="property-meta clearfix">-->
<!--                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>-->
<!--                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span>-->
<!--                    </div>-->
<!--                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--        </div>-->
<!--    </div>-->
    <!-- /.row-fluid -->
</div>
<!-- /#property_list -->
<div id="property_info">
    <div class="container carousel-wrapper">
        <div id="recent-title-listing" class="container">
            <div class="recent-property-list-title">Recent Properties</div>
            <div class="recent-property-list-by">
                <div class="jcarousel-control">
                    <a href="#" class="jcarousel-control-prev">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-left"></i>
									</span>
                    </a>
                    <a href="#" class="jcarousel-control-next">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-right"></i>
									</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /#title-listing -->
        <div class="jcarousel container">
            <div class="jcontainer">
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="Florida 5, Pinecrest, FL"><img width="540"
                                                                                                 height="360"
                                                                                                 src="uploads/dummy-540x360.png"
                                                                                                 class="status-35 wp-post-image"
                                                                                                 alt="Florida 5, Pinecrest, FL"
                                                                                                 title="Florida 5, Pinecrest, FL"/></a>

                            <div class="property-status status-35-text">On Sale</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL">Florida
                                    5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">240M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="3015 Grand Avenue, CocoWalk"><img width="540"
                                                                                                    height="360"
                                                                                                    src="uploads/dummy-540x360.png"
                                                                                                    class="status-28 wp-post-image"
                                                                                                    alt="3015 Grand Avenue, CocoWalk"
                                                                                                    title="3015 Grand Avenue, CocoWalk"/></a>

                            <div class="property-status status-28-text">For Rent</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html"
                                                           title="3015 Grand Avenue, CocoWalk">3015 Grand Avenue,
                                    CocoWalk</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">250 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540"
                                                                                                            height="360"
                                                                                                            src="uploads/dummy-540x360.png"
                                                                                                            class="status-35 wp-post-image"
                                                                                                            alt="1200 Anastasia Avenue, Coral Gables"
                                                                                                            title="1200 Anastasia Avenue, Coral Gables"/></a>

                            <div class="property-status status-35-text">On Sale</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html"
                                                           title="1200 Anastasia Avenue, Coral Gables">1200 Anastasia
                                    Avenue, Cora...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360"
                                                                                              src="uploads/dummy-540x360.png"
                                                                                              class="status-28 wp-post-image"
                                                                                              alt="60 Merrick Way, Miami"
                                                                                              title="60 Merrick Way, Miami"/></a>

                            <div class="property-status status-28-text">For Rent</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami">60
                                    Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">280M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">6</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540"
                                                                                                     height="360"
                                                                                                     src="uploads/dummy-540x360.png"
                                                                                                     class="status-28 wp-post-image"
                                                                                                     alt="15421 Southwest 39th Terrace"
                                                                                                     title="15421 Southwest 39th Terrace"/></a>

                            <div class="property-status status-28-text">For Rent</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html"
                                                           title="15421 Southwest 39th Terrace">15421 Southwest 39th
                                    Terrac...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">240 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">2</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540"
                                                                                                       height="360"
                                                                                                       src="uploads/dummy-540x360.png"
                                                                                                       class="status-35 wp-post-image"
                                                                                                       alt="700 Front Street, Key West, FL"
                                                                                                       title="700 Front Street, Key West, FL"/></a>

                            <div class="property-status status-35-text">On Sale</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html"
                                                           title="700 Front Street, Key West, FL">700 Front Street, Key
                                    West,...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540"
                                                                                                 height="360"
                                                                                                 src="uploads/dummy-540x360.png"
                                                                                                 class="status-35 wp-post-image"
                                                                                                 alt="1903 Hollywood Boulevard"
                                                                                                 title="1903 Hollywood Boulevard"/></a>

                            <div class="property-status status-35-text">On Sale</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard">1903
                                    Hollywood Boulevard</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Toronto</span>

                            <div class="attribute-price">
											<span class="attr-pricing">
											<sup class="price-curr">$</sup>9,800</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">450 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="401 Biscayne Boulevard, Miami"><img width="540"
                                                                                                      height="360"
                                                                                                      src="uploads/dummy-540x360.png"
                                                                                                      class="status-28 wp-post-image"
                                                                                                      alt="401 Biscayne Boulevard, Miami"
                                                                                                      title="401 Biscayne Boulevard, Miami"/></a>

                            <div class="property-status status-28-text">For Rent</div>
                        </div>
                        <!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html"
                                                           title="401 Biscayne Boulevard, Miami">401 Biscayne Boulevard,
                                    Mia...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>

                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span
                                    class="meta-text">300M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span
                                    class="meta-text">5</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span
                                    class="meta-text">7</span></div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- jcontainer -->
        </div>
        <!-- /.jcarousel -->
    </div>
    <!-- /.container -->
</div>
<? if(isset($partners) && !is_null($partners)) : ?>
<?=$partners ?>
<? endif; ?>
</div><!-- /.content-wrapper -->
