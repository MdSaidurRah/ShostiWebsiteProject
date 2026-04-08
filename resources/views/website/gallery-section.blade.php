<!--? Gallery Area Start -->
        <div class="gallery-area theme-bg-option3">
            <div class="container-fluid p-0 fix">
                <div class="row">

                    <?php
                        $firstGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'first')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($firstGalleryItems->count() > 0)
                        @foreach($firstGalleryItems as $firstItem)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($firstItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>{{$firstItem->title}}</span></h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/item_title')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif    
                    
                    
                    <?php
                        $secondGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'second')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($secondGalleryItems->count() > 0)
                        @foreach($secondGalleryItems as $secondItem)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($secondItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>{{$secondItem->title}}</span></h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif    
                    
                    
                    <?php
                        $thirdGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'third')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($thirdGalleryItems->count() > 0)
                        @foreach($thirdGalleryItems as $thirdItem)
                            <div class="col-xl-6 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($thirdItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>{{$thirdItem->title}}</span></h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif   
                    
                    <?php
                        $fourthGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'fourth')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($fourthGalleryItems->count() > 0)
                        @foreach($fourthGalleryItems as $fourthItem)
                            <div class="col-xl-6 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($fourthItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>{{$fourthItem->title}}</span></h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif    


                    <?php
                        $fifthGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'fifth')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($fifthGalleryItems->count() > 0)
                        @foreach($fifthGalleryItems as $fifthItem)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($fifthItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>Duplex</span>Interior</h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif    

                    <?php
                        $sixthGalleryItems = DB::table('gallery')
                                ->where('status', 'Published')
                                ->where('item_category', 'sixth')
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();
                    ?>

                    @if($sixthGalleryItems->count() > 0)
                        @foreach($sixthGalleryItems as $sixthItem)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img" style="background-image: url({{ url($sixthItem->gallery_image) }});"></div>
                                    <div class="thumb-content-box">
                                        <div class="thumb-content">
                                            <h3><span>Duplex</span>Interior</h3>
                                            <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img" style="background-image: url(http://127.0.0.1:8000/website/assets/img/gallery/gallery2.jpg);"></div>
                                <div class="thumb-content-box">
                                    <div class="thumb-content">
                                        <h3><span>Kitchen</span>Interior</h3>
                                        <a href="{{url('/portfolio')}}"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif    


                  
                     
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->