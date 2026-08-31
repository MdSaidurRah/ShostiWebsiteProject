<!-- Custom CSS -->
<style>
    .process-card {
        background: #ffffff;
        margin-bottom: 30px;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .process-card h4 {
        font-size: 20px;
        font-size: 22px;
        color:var(--light-pine-green);
    }

    .step-number {
        position: absolute;
        top: -20px;
        right: 20px;
        background: var(--light-pine-green);
        color: #fff;
        font-weight: 700;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .ad-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>


<!--? Services Ara Start -->
<!-- Process Flow Section Start -->


<section class="py-5 theme-bg-option2">
    <div class="container">



        <!-- Process Cards -->
        <div class="row g-4 justify-content-center">
            
            
                  <!-- Section Title -->
                        <div class="text-center mb-5">
                            <h2 class="fw-bold" style="font-size:32px;">  Our Approach </h2>
                            <p class="text-muted mt-2">
                                Our process is smooth, efficient, and easy to follow
                            </p>
                        </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        

                  
                        <!-- Step 1 -->
                        <div class="col-md-12 col-lg-12">
                            <div class="process-card position-relative p-4 rounded-4">
                                <span class="step-number">01</span>
                                <h4 class="fw-bold mb-3">Discovery & Consultation </h4>
                                <p class="text-muted mb-0">
                                    Meeting to define your vision, budget, and project requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-md-12 col-lg-12">
                            <div class="process-card position-relative p-4 rounded-4">
                                <span class="step-number">02</span>
                                <h4 class="fw-bold mb-3">Design Development</h4>
                                <p class="text-muted mb-0">
                                    Creating customized concepts and detailed 3D/technical drawings.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="col-md-12 col-lg-12">
                            <div class="process-card position-relative p-4 rounded-4">
                                <span class="step-number">03</span>
                                <h4 class="fw-bold mb-3">Estimation & Planning</h4>
                                <p class="text-muted mb-0">
                                    Providing a transparent BOQ (Bill of Quantities) and finalizing material selections.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="col-md-12 col-lg-12">
                            <div class="process-card position-relative p-4 rounded-4">
                                <span class="step-number">04</span>
                                <h4 class="fw-bold mb-3">Execution & Installation</h4>
                                <p class="text-muted mb-0">
                                    Managing on-site construction with precision and professional craftsmanship.
                                </p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="col-md-12 col-lg-12">
                            <div class="process-card position-relative p-4 rounded-4">
                                <span class="step-number">05</span>
                                <h4 class="fw-bold mb-3">Quality Check & Handover</h4>
                                <p class="text-muted mb-0">
                                    Final inspection to ensure excellence before you move into your new space.
                                </p>
                            </div>
                        </div>

                    
                    </div>

                </div>
                <div class="col-md-6">

                    <?php
                    $adversitisement = DB::table('business_advertisements')
                        ->where('status', 'Published')
                        ->orderBy('id', 'DESC')
                        ->limit(1)
                        ->first();

                    ?>
                    <div class="ad-image">                             
                        <img src="{{url($adversitisement->cover_photo) ?? static_asset('website/assets/img/service/interior-service.jpg')}}" alt="Process Flow Video" class="img-fluid rounded-4">
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>