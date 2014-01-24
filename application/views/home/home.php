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
<div id="slider_wrapper">
    <div class="flexslider">
        <ul class="slides">
            <!----------------#Property Images Slider#------------------------->
            <li>
                <img src="/uploads/dummy-1500x700.png" alt="15421 Southwest 39th Terrace" />
                <div class="container">
                    <div class="flex-caption">
                        <div class="caption-title">
                            <h3><a href="property-single.html">15421 Southwest 39th Terrace</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, se</p>
                        </div>
                        <div class="caption-meta">
                            <p class="caption-status">For Rent</p>
                            <p class="caption-price"><sup class="price-curr">$</sup>3,850</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="/uploads/dummy-1500x700.png" alt="700 Front Street, Key West, FL" />
                <div class="container">
                    <div class="flex-caption">
                        <div class="caption-title">
                            <h3><a href="property-single.html">700 Front Street, Key West, FL</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, se</p>
                        </div>
                        <div class="caption-meta">
                            <p class="caption-status">For Sale</p>
                            <p class="caption-price"><sup class="price-curr">$</sup>34,400</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="uploads/dummy-1500x700.png" alt="1903 Hollywood Boulevard" />
                <div class="container">
                    <div class="flex-caption">
                        <div class="caption-title">
                            <h3><a href="property-single.html">1903 Hollywood Boulevard</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, se</p>
                        </div>
                        <div class="caption-meta">
                            <p class="caption-status">For Sale</p>
                            <p class="caption-price"><sup class="price-curr">$</sup>9,800</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div><!-- /#slider-wrapper -->
<div id="search_form" class="container">
    <section class="advance-search">
        <div class="as-form-wrapper">
            <!------------------------#Advanced Search Form#------------------------------>
            <form class="advance-search-form clearfix form-inline" action="#" method="get">
                <div class="option-bar location">
                    <input class="input-location" type="text" name="real_location" placeholder="e.g. 21 street, Many Hill, New York" />
                </div>
                <div class="option-bar type">
								<span class="selectwrap">
									<select name="real_type" id="select-type" class="search-select">
                                        <option value="apartments">Apartments</option><option value="bungalows">Bungalows</option><option value="condominium">Condominium</option>
                                        <option value="villas">Villas</option><option value="any" selected="selected">Type - Any</option>
                                    </select>
								</span>
                </div>
                <div class="option-bar status">
								<span class="selectwrap">
									<select name="real_status" id="select-status" class="search-select">
                                        <option value="for-rent">For Rent</option>
                                        <option value="for-sale">For Sale</option>
                                        <option value="any" selected>Status</option>
                                    </select>
								</span>
                </div>
                <div class="option-bar bedroom">
								<span class="selectwrap">
									<select name="real_bedroom" id="select-bedroom" class="search-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="any" selected="selected">Bedroom</option>
                                    </select>
								</span>
                </div>
                <div class="option-bar bathroom">
								<span class="selectwrap">
									<select name="real_bathroom" id="select-bathroom" class="search-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option><option value="any" selected="selected">Bathroom</option>
                                    </select>
								</span>
                </div>
                <div class="option-bar min-price">
								<span class="selectwrap">
									<select name="min_price" id="select-min-price" class="search-select">
                                        <option value="1000">$1,000</option>
                                        <option value="5000">$5,000</option>
                                        <option value="10000">$10,000</option>
                                        <option value="50000">$50,000</option>
                                        <option value="100000">$100,000</option>
                                        <option value="200000">$200,000</option>
                                        <option value="300000">$300,000</option>
                                        <option value="400000">$400,000</option>
                                        <option value="500000">$500,000</option>
                                        <option value="600000">$600,000</option>
                                        <option value="700000">$700,000</option>
                                        <option value="800000">$800,000</option>
                                        <option value="900000">$900,000</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="2000000">$2,000,000</option>
                                        option value="2500000">$2,500,000</option>
                                        <option value="5000000">$5,000,000</option>
                                        <option value="any" selected="selected">Min. Price</option>
                                    </select>
								</span>
                </div>
                <div class="option-bar max-price">
								<span class="selectwrap">
									<select name="max_price" id="select-max-price" class="search-select">
                                        <option value="5000">$5,000</option>
                                        <option value="10000">$10,000</option>
                                        <option value="50000">$50,000</option>
                                        <option value="100000">$100,000</option>
                                        <option value="200000">$200,000</option>
                                        <option value="300000">$300,000</option>
                                        <option value="400000">$400,000</option>
                                        <option value="500000">$500,000</option>
                                        <option value="600000">$600,000</option>
                                        <option value="700000">$700,000</option>
                                        <option value="800000">$800,000</option>
                                        <option value="900000">$900,000</option>
                                        <option value="1000000">$1,000,000</option>
                                        <option value="1500000">$1,500,000</option>
                                        <option value="2000000">$2,000,000</option>
                                        <option value="2500000">$2,500,000</option>
                                        <option value="5000000">$5,000,000</option>
                                        <option value="10000000">$10,000,000</option>
                                        <option value="any" selected="selected">Max. Price</option>
                                    </select>
								</span>
                </div>
                <div class="option-submit">
                    <input type="submit" class="advance-button-search" value="&nbsp;" />
                </div>
            </form>
        </div><!-- /.as-form-wrapper -->
    </section><!-- /.advance-search -->
</div><!-- /#search_form -->
<div id="property_list" class="container">
    <div id="title-listing" class="container">
        <div class="property-list-title">Featured Properties</div>
        <div class="property-list-by">
            <a class="current" href="#">All</a>
            <a class="" href="#">Apartments</a>
            <a class="" href="#">Bungalows</a>
            <a class="" href="#">Condominium</a>
            <a class="" href="#">Villas</a>
        </div>
    </div><!-- /#title-listing -->
    <div class="row-fluid property-row">
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="Florida 5, Pinecrest, FL">
                        <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" /></a>
                    <div class="property-status status-35-text">On Sale</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="3015 Grand Avenue, CocoWalk">
                        <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="3015 Grand Avenue, CocoWalk" title="3015 Grand Avenue, CocoWalk" />
                    </a>
                    <div class="property-status status-28-text">For Rent</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title">
                        <a href="property-single.html" title="3015 Grand Avenue, CocoWalk" >3015 Grand Avenue, CocoWalk</a>
                        <i class="icon-heart"></i>
                    </h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">250 M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>
                    <div class="property-status status-35-text">On Sale</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Cora...</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>						<div class="property-status status-28-text">For Rent</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
                </div>
            </article>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>						<div class="property-status status-28-text">For Rent</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrac...</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL" /></a>						<div class="property-status status-35-text">On Sale</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title">
                        <a href="property-single.html" title="700 Front Street, Key West, FL" >700 Front Street, Key West,...</a>
                        <i class="icon-heart"></i>
                    </h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1903 Hollywood Boulevard" title="1903 Hollywood Boulevard" /></a>
                    <div class="property-status status-35-text">On Sale</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard" >1903 Hollywood Boulevard</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Toronto</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>9,800</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">450 M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                </div>
            </article>
        </div>
        <div class="span3">
            <article class="property-item">
                <div class="property-images">
                    <a href="property-single.html" title="401 Biscayne Boulevard, Miami">
                        <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>						<div class="property-status status-28-text">For Rent</div>
                </div><!-- /.property-images -->
                <div class="property-attribute">
                    <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Mia...</a><i class="icon-heart"></i></h3>
                    <span class="attribute-city">Miami</span>
                    <div class="attribute-price">
                        <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                    </div>
                </div>
                <div class="property-meta clearfix">
                    <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
                    <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
                    <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
                </div>
            </article>
        </div>
    </div><!-- /.row-fluid -->
</div><!-- /#property_list -->
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
        </div><!-- /#title-listing -->
        <div class="jcarousel container">
            <div class="jcontainer">
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="Florida 5, Pinecrest, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" /></a>
                            <div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="3015 Grand Avenue, CocoWalk"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="3015 Grand Avenue, CocoWalk" title="3015 Grand Avenue, CocoWalk" /></a>										<div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="3015 Grand Avenue, CocoWalk" >3015 Grand Avenue, CocoWalk</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">250 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>										<div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Cora...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>										<div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>										<div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrac...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL" /></a>										<div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="700 Front Street, Key West, FL" >700 Front Street, Key West,...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1903 Hollywood Boulevard" title="1903 Hollywood Boulevard" /></a>										<div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard" >1903 Hollywood Boulevard</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Toronto</span>
                            <div class="attribute-price">
											<span class="attr-pricing">
											<sup class="price-curr">$</sup>9,800</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">450 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-images">
                            <a href="property-single.html" title="401 Biscayne Boulevard, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>										<div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Mia...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
                        </div>
                    </article>
                </div>
            </div><!-- jcontainer -->
        </div><!-- /.jcarousel -->
    </div><!-- /.container -->
</div><!-- /#property_info -->
<div id="property_partner">
    <div class="container">
        <header class="partner-header">
            <h3 class="partner-title">Our Partners</h3>
        </header>
        <p class="partner-excerpt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fermentum diam, vitae gravida eros. Proin interdum imperdiet
        </p>
        <div id="partners_slider" class="partners-logo-wrapper">
            <div class="partner-list">
                <div class="partner-item">
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.themeforest.net" title="Themeforest2">
                        <img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Themeforest2" title="Themeforest2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.photodune.net" title="Photodune2">
                        <img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Photodune2" title="Photodune2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver2">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver2" title="graphicriver2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.videohive.net" title="videohive">
                        <img width="170" height="55" src="uploads/videohive-170x55.png" class="attachment-partners-thumb wp-post-image" alt="videohive" title="videohive" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.activeden.net" title="activeden">
                        <img width="170" height="55" src="uploads/activeden-170x55.png" class="attachment-partners-thumb wp-post-image" alt="activeden" title="activeden" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.themeforest.net" title="themeforest">
                        <img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="themeforest" title="themeforest" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.photodune.net" title="photodune">
                        <img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="photodune" title="photodune" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
                    </a>
                </div>
            </div>
            <div class="partner-control">
                <a href="#" class="partner-prev"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-left"></i></span></a>
                <a href="#" class="partner-next"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-right"></i></span></a>
            </div>
        </div>
    </div>
</div><!-- /#property_partner -->
</div><!-- /.content-wrapper -->
<section id="footer_widgets">
    <div id="footer_widget_wrapper">
        <!--------------------------------------#Footer Widgets Area#----------------------------------->
        <div class="container">
            <div class="row-fluid">
                <div id="text-2" class="span4 widget widget_text">
                    <h3 class="widget-title">About Real Expert</h3>
                    <div class="textwidget">
                        <p>Aquam est tortor, sagittis in fringilla in, pellent esque nec erat.  Aenean semper, neque non faucibus. tortor, sagittis in fringilla in, pellent esque nec eratsemper, neque non.</p>
                        <p>Malesuada, dui felis tempor felis, vel varius ante diam ut mais eque non faucibus. tortor, sagittis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
                <div id="pages-2" class="span2 widget widget_pages">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul>
                        <li class="page_item page-item-14"><a href="#">Blog</a></li>
                        <li class="page_item page-item-18"><a href="#">Contact Us</a></li>
                        <li class="page_item page-item-115"><a href="#">Listing</a></li>
                        <li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
                        <li class="page_item page-item-1681"><a href="#">Property Search</a></li>
                        <li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
                    </ul>
                </div>
                <div id="pages-5" class="span2 widget widget_pages">
                    <h3 class="widget-title">Another Links</h3>
                    <ul>
                        <li class="page_item page-item-14"><a href="#">Blog</a></li>
                        <li class="page_item page-item-18"><a href="#">Contact Us</a></li>
                        <li class="page_item page-item-115"><a href="#">Listing</a></li>
                        <li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
                        <li class="page_item page-item-1681"><a href="#">Property Search</a></li>
                        <li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
                    </ul>
                </div>
                <div id="blog-widget-2" class="span4 widget blog">
                    <h3 class="widget-title">Recent Blogs</h3>
                    <ul class="footer-blog">
                        <li>
                            <a href="#">
                                <img width="70" height="60" src="uploads/dummy-70x60.png" class="alignleft wp-post-image" alt="Lectus non rutrum pulvinar urna leo dignissim lorem" />
                            </a>
                            <a href="#">Lectus non rutrum pulvinar urna leo dignissim lorem</a><br />
                            <span class="blog-date">On : October 30, 2013</span>
                        </li>
                        <li>
                            <a href="#">
                                <img width="70" height="60" src="uploads/dummy-70x60.png" class="alignleft wp-post-image" alt="Aenean dignissim dignissim lorem pellentesque felis risus" /></a>
                            <a href="#">Aenean dignissim dignissim lorem pellentesque felis risus</a><br />
                            <span class="blog-date">On : September 25, 2013</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------------------------#/Footer Widgets Area#----------------------------------->
    </div><!-- /.footer-widget-wrapper -->
</section><!-- #footer_widgets -->