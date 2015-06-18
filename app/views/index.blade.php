@extends('layouts.default')
@section('head-tag')
    <title>WiVert - Landing page</title>
@stop
@section('body-tag')

        <!-- Content -->
        <div class="row content">
            <div class="col-lg-3 content-left">
                <h4>Search</h4>
                <div class="well well-sm">
                    <form>
                        <fieldset>
                            <input type="text" class="form-control" />
                            <small><a href="#" class="btn-advanced-search">Advanced</a></small>
                            <input type="submit" class="btn btn-danger btn-sm btn-search" value="Search" />
                        </fieldset>
                    </form>
                </div>
                <h4>Categories</h4>
                <div class="list-group categories">
                    <a href="#" class="list-group-item">Books <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Cameras & Photo <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Cell Phones & Accessories <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Clothing, Shoes & Accessories <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Computers & Networking <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">DVDs & Movies <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Health & Beauty <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Music <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#" class="list-group-item">Toys & Hobbies <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <h4>Newest classifieds</h4>
                <div class="newest-classifieds">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                        </a>
                        <div class="media-body">
                            <p><a href="#"><strong>Samsung Galaxy S4</strong></a></p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                        </a>
                        <div class="media-body">
                            <p><a href="#"><strong>Vizio 60" Slim Frame 3D LED</strong></a></p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                        </a>
                        <div class="media-body">
                            <p><a href="#"><strong>Apple McBook Pro</strong></a></p>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                        </div>
                    </div>
                    <p class="text-right show-more"><a href="#">More &rarr;</a></p>
                </div>
            </div>
            <div class="col-lg-9 content-right">
                <h4>Featured</h4>
                <div id="slides">
                    <img src="img/slides/slide-00.jpg">
                    <img src="img/slides/slide-01.jpg">
                    <img src="img/slides/slide-02.jpg">
                    <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
                    <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
                </div>
                <h4>Recommended</h4>
                <div class="row selected-classifieds">
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="{{url($hotspot.'/adverts/buy-1-get-1-free')}}">Samsung Galaxy S4</a></small><p>
                                <p><strong>550 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="{{url($hotspot.'/adverts/Free-Wifi')}}">Vizio 60" Slim Frame 3D LED</a></small><p>
                                <p><strong>370 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="{{url($hotspot.'/adverts/3')}}">Logitech 2.1 HS-263</a></small><p>
                                <p><strong>36 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="#">Apple McBook Pro</a></small><p>
                                <p><strong>740 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row selected-classifieds">
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="{{url($hotspot.'/adverts/4')}}">Adidas Blake 46"</a></small><p>
                                <p><strong>55 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="#">Card reader MobileLite G2</a></small><p>
                                <p><strong>10 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="#">Electonics toolkit (40 pieces)</a></small><p>
                                <p><strong>28 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x600/e0e0e0" />
                            <div class="caption">
                                <p><small><a href="#">Nokia Lumia 800</a></small><p>
                                <p><strong>185 EUR</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Content -->

@stop






{{--
@foreach ($authors as $author)
    {{{ $author->name }}}
@endforeach--}}