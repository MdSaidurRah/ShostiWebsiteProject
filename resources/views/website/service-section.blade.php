<!--? Services Ara Start -->
        <div class="services-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Our Professional Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php 
                        $serviceItems =  DB::table('gallery')->where('item_type','Service Element')->where('status','Published')->orderBy('id','DESC')->limit(3)->get();
                    ?>
                    
                    @foreach($serviceItems as $item)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="single-services mb-200">
                                <div class="services-img">
                                    <img src="{{ $item->gallery_image ?? static_asset('website/assets/img/service/interior-service.jpg') }}" alt="">
                                </div>
                                <div class="services-caption">
                                    <h3><a href="{{ $item->reference_link }}">{{$item->title}}</a></h3>
                                    <p class="pera1">For each project we establish </p>
                                    <p class="pera2">For each project we establish relationships with partners who we know will help us. </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </div>
        <!-- Services Ara End -->