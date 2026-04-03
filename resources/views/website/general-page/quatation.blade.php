@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Quotation & Pricing Page Start -->
<section class="pricing-page py-5 py-lg-6"> 
    <div class="container">

        <!-- Header -->



        <!-- Pricing Packages -->
        <div class="row g-4">
            <div class="col-12">
                <h3 class="qp-section-title mb-3 text-center">Pricing Packages</h3>
                <p class="text-muted text-center mb-4">
                    Choose a finish level. We’ll customize based on your scope and measurements.
                </p>
            </div>

            @foreach($packages as $item)

                <!-- Basic -->
                <div class="col-md-6 col-lg-3">
                    <div class="pkg-card h-100">
                        <div class="pkg-top">
                            <span class="pkg-badge">{{$item->package_type}}</span>
                            <h4 class="pkg-title mt-2 mb-1">{{$item->package_title}}</h4>
                            <div >
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="pkg-from">{{$item->development_duration}}</span>
                                        </td>
                                        <td>
                                             Price : {{$item->package_price}}
                                        </td>
                                    </tr>
                                </table>
                                
                              
                            </div>
                           
                            <div>
                                  <span class="pkg-amount">Size : {{$item->package_size}}</span>
                            </div>
                            <p class="pkg-sub text-muted mb-0">
                                {{$item->package_description}}
                            </p> 
                            
                           
                        </div>
                      

                      

                        <a href="{{ url('/contact-us') }}" class="btn btn-outline-dark rounded-pill px-4 w-100">
                            Get Quote
                        </a>
                    </div>
                </div>

            @endforeach

            

          
        </div>

        <br/>


        <!-- <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="qp-pill">Quotation & Pricing</span>
                    <h1 class="qp-h1 mt-3 mb-2">Get a clear estimate for your project</h1>
                    <p class="qp-lead mb-0">
                        Transparent pricing based on your space, scope, and finish level. Share your requirements and we’ll send a detailed quotation.
                    </p>
                </div>
            </div>
        </div> -->

        <!-- Top: How it works + Quick Contact -->
        <div class="row g-4 align-items-stretch mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="qp-card h-100">
                    <h4 class="qp-card-title mb-3">How our quotation works</h4>

                    <div class="qp-steps">
                        <div class="qp-step">
                            <div class="qp-step-no">1</div>
                            <div>
                                <div class="qp-step-title">Share details</div>
                                <div class="qp-step-text">Send your layout, dimensions, style preference, and timeline.</div>
                            </div>
                        </div>

                        <div class="qp-step">
                            <div class="qp-step-no">2</div>
                            <div>
                                <div class="qp-step-title">Site visit (if needed)</div>
                                <div class="qp-step-text">We verify measurements and understand constraints for accurate costing.</div>
                            </div>
                        </div>

                        <div class="qp-step">
                            <div class="qp-step-no">3</div>
                            <div>
                                <div class="qp-step-title">Receive quotation</div>
                                <div class="qp-step-text">You get a scope-wise estimate with material and work breakdown.</div>
                            </div>
                        </div>

                        <div class="qp-step">
                            <div class="qp-step-no">4</div>
                            <div>
                                <div class="qp-step-title">Finalize & schedule</div>
                                <div class="qp-step-text">We confirm deliverables, timeline, and start your project smoothly.</div>
                            </div>
                        </div>
                    </div>

                    <div class="qp-note mt-4">
                        <strong>Note:</strong> Final pricing depends on area size, design complexity, material selection, and site conditions.
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="qp-card qp-highlight h-100">
                    <h4 class="qp-card-title mb-2">Request a quotation</h4>
                    <p class="text-muted mb-3">Contact us with your project details to get a fast estimate.</p>

                    <div class="qp-contact">
                        <div class="qp-contact-item">
                            <span class="qp-contact-label">Phone</span>
                            <a class="qp-link" href="tel:+8801737797773">+88 01737797773</a>
                        </div>

                        <div class="qp-contact-item">
                            <span class="qp-contact-label">Email</span>
                            <a class="qp-link" href="mailto:shosti.arcstudio@gmail.com">info@shostiarcstudio.com</a>
                        </div>

                        <div class="qp-contact-item">
                            <span class="qp-contact-label">Get started</span>
                            <a class="btn btn-success rounded-pill px-4" href="{{ url('/contact-us') }}">Send Requirements</a>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="qp-small text-muted">
                        <div class="mb-1"><strong>What to send:</strong> Space type, location, area (sqft), inspiration photos, budget range, timeline.</div>
                        <div><strong>Turnaround:</strong> We usually respond within 24–48 hours.</div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- FAQ -->
        <div class="row justify-content-center mt-5">
            <div class="col-xl-10">
                <div class="qp-card">
                    <h4 class="qp-card-title mb-3">Frequently asked questions</h4>

                    <div class="qp-faq">
                        <div class="qp-faq-item">
                            <div class="qp-faq-q">Do you provide fixed pricing?</div>
                            <div class="qp-faq-a text-muted">We provide a detailed quotation. Final cost is fixed once scope and materials are finalized.</div>
                        </div>

                        <div class="qp-faq-item">
                            <div class="qp-faq-q">What affects the price most?</div>
                            <div class="qp-faq-a text-muted">Area size, complexity, material grade, custom furniture, and site conditions.</div>
                        </div>

                        <div class="qp-faq-item">
                            <div class="qp-faq-q">How can I get a fast estimate?</div>
                            <div class="qp-faq-a text-muted">Share sqft, location, service type, and 2–3 reference photos. We’ll respond quickly.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Quotation & Pricing Page End -->

<style>
    .pricing-page{
        background: linear-gradient(180deg, #f6f7f9 0%, #ffffff 60%);
    }

    .qp-pill{
        display:inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 700;
        font-size: .8rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #198754;
        background: rgba(25,135,84,.10);
    }

    .qp-h1{
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.15;
        color: #111827;
        font-size: clamp(1.7rem, 2.2vw + 1rem, 2.6rem);
    }

    .qp-lead{
        color:#6c757d;
        line-height:1.7;
        max-width: 820px;
        margin: 0 auto;
    }

    .qp-section-title{
        font-weight: 900;
        letter-spacing: -0.02em;
        color:#111827;
    }

    .qp-card{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 22px;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
    }

    .qp-highlight{
        border-color: rgba(25,135,84,.25);
    }

    .qp-card-title{
        font-weight: 900;
        letter-spacing: -0.02em;
        color:#111827;
    }

    .qp-steps{
        display:flex;
        flex-direction:column;
        gap: 14px;
    }

    .qp-step{
        display:flex;
        gap: 12px;
        align-items:flex-start;
    }

    .qp-step-no{
        width: 34px;
        height: 34px;
        border-radius: 12px;
        display:flex;
        align-items:center;
        justify-content:center;
        background: rgba(25,135,84,.10);
        color:#198754;
        font-weight: 900;
        flex: 0 0 auto;
    }

    .qp-step-title{
        font-weight: 800;
        color:#111827;
        margin-bottom: 2px;
    }

    .qp-step-text{
        color:#6c757d;
        line-height: 1.7;
    }

    .qp-note{
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        padding: 12px 14px;
        border-radius: 14px;
        color:#6c757d;
        line-height: 1.7;
    }

    .qp-contact{
        display:flex;
        flex-direction:column;
        gap: 12px;
    }

    .qp-contact-item{
        display:flex;
        flex-direction:column;
        gap: 4px;
    }

    .qp-contact-label{
        font-size: .78rem;
        text-transform: uppercase;
        letter-spacing: .08em;
        color:#6c757d;
        font-weight: 700;
    }

    .qp-link{
        color:#198754;
        font-weight: 700;
        text-decoration:none;
    }
    .qp-link:hover{ text-decoration: underline; }

    .qp-small{
        line-height: 1.7;
        font-size: .95rem;
    }

    /* Packages */
    .pkg-card{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
        transition: .2s ease;
    }

    .pkg-card:hover{
        transform: translateY(-3px);
        box-shadow: 0 18px 45px rgba(0,0,0,.08);
        border-color: rgba(25,135,84,.25);
    }

    .pkg-featured{
        border-color: rgba(25,135,84,.35);
        box-shadow: 0 18px 55px rgba(25,135,84,.12);
    }

    .pkg-top{
        padding-bottom: 14px;
        border-bottom: 1px solid #e9ecef;
        margin-bottom: 14px;
    }

    .pkg-badge{
        display:inline-block;
        font-weight: 800;
        font-size: .78rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        padding: 6px 10px;
        border-radius: 999px;
        background: rgba(0,0,0,.06);
        color:#111827;
    }

    .pkg-title{
        font-weight: 900;
        letter-spacing: -0.02em;
        color:#111827;
    }

    .pkg-price{
        display:flex;
        gap: 10px;
        align-items: baseline;
        margin: 10px 0 8px;
    }

    .pkg-from{
        color:#6c757d;
        font-weight: 700;
        font-size: .9rem;
    }

    .pkg-amount{
        font-weight: 900;
        font-size: 1.2rem;
        color:#111827;
    }

    .pkg-sub{
        line-height: 1.7;
    }

    .pkg-list{
        list-style:none;
        padding:0;
        margin: 0 0 16px 0;
        display:flex;
        flex-direction:column;
        gap: 10px;
        color:#6c757d;
        line-height: 1.7;
    }

    .pkg-list li{
        position: relative;
        padding-left: 18px;
    }

    .pkg-list li::before{
        content:"";
        position:absolute;
        left:0;
        top: 10px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(25,135,84,.35);
    }

    /* FAQ */
    .qp-faq{
        display:flex;
        flex-direction:column;
        gap: 14px;
    }

    .qp-faq-item{
        padding: 12px 14px;
        border: 1px solid #e9ecef;
        border-radius: 14px;
        background: #fff;
    }

    .qp-faq-q{
        font-weight: 900;
        color:#111827;
        margin-bottom: 4px;
    }

    @media (max-width: 575.98px){
        .qp-card{ padding: 16px; }
        .pkg-card{ padding: 16px; }
    }
</style>

@endsection