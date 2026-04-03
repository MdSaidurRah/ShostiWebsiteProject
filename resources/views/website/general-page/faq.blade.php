@extends('website.layouts.inner-layout')
@section('page-content')

<!-- About Area Start -->
<section class="about-area page-content section-padding">
    <div class="container">


     <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <h1 class="fq-h1 mt-3 mb-2">Frequently Asked Questions</h1>
                    <p class="fq-lead mb-0">
                        Quick answers about our process, pricing, timelines, and services. If you need more help, contact us anytime.
                    </p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
            <div id="faqAccordion" class="faq-accordion">

                <!-- Item 1 -->
                <div class="faq-card">
                <div class="faq-card-header" id="q1">
                    <button class="faq-btn" data-toggle="collapse" data-target="#a1" aria-expanded="true" aria-controls="a1">
                    <span class="faq-question">How long does delivery take?</span>
                    <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                </div>

                <div id="a1" class="collapse show" aria-labelledby="q1" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                    Usually 1–3 business days in major cities. Outside city areas may take 3–5 days.
                    </div>
                </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-card">
                <div class="faq-card-header" id="q2">
                    <button class="faq-btn collapsed" data-toggle="collapse" data-target="#a2" aria-expanded="false" aria-controls="a2">
                    <span class="faq-question">What is your return policy?</span>
                    <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                </div>

                <div id="a2" class="collapse" aria-labelledby="q2" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                    You can return within 7 days if the item is unused and in original packaging.
                    </div>
                </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-card">
                <div class="faq-card-header" id="q3">
                    <button class="faq-btn collapsed" data-toggle="collapse" data-target="#a3" aria-expanded="false" aria-controls="a3">
                    <span class="faq-question">Can I pay with Cash on Delivery?</span>
                    <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                </div>

                <div id="a3" class="collapse" aria-labelledby="q3" data-parent="#faqAccordion">
                    <div class="faq-card-body">
                    Yes, Cash on Delivery is available in selected areas.
                    </div>
                </div>
                </div>

            </div><!-- /faqAccordion -->
            </div>
        </div>

    </div>
</section>
<!-- About Area End -->

{{-- Page-scoped styles --}}
<style>
  /* Header */
  .faq-head{ max-width: 720px; }
  .faq-badge{
    display:inline-block;
    padding: .45rem .8rem;
    border-radius: 999px;
    font-size: .85rem;
    font-weight: 600;
    letter-spacing: .2px;
    background: rgba(255,255,255,.18);
    backdrop-filter: blur(6px);
    border: 1px solid rgba(255,255,255,.25);
    color: #fff;
  }
  .faq-title{
    font-size: 2rem;
    font-weight: 800;
    line-height: 1.2;
    color: #fff;
    margin-bottom: .75rem;
  }
  .faq-subtitle{
    font-size: 1rem;
    opacity: .9;
    color: rgba(255,255,255,.85);
    margin: 0;
  }

  /* Accordion wrapper */
  .faq-accordion{ display:flex; flex-direction:column; gap: 14px; }

  /* Card */
  .faq-card{
    border-radius: 16px;
    overflow: hidden;
    background: rgba(255,255,255,.92);
    border: 1px solid rgba(0,0,0,.06);
    box-shadow: 0 12px 30px rgba(0,0,0,.08);
  }

  /* Header */
  .faq-card-header{
    padding: 0;
    background: transparent;
  }

  /* Button */
  .faq-btn{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 16px;
    padding: 18px 18px 18px 20px;
    text-align:left;
    border: 0;
    background: transparent;
    cursor: pointer;
    position: relative;
  }

  /* Left accent bar */
  .faq-btn::before{
    content:"";
    position:absolute;
    left:0;
    top: 14px;
    bottom: 14px;
    width: 4px;
    border-radius: 999px;
    background: linear-gradient(180deg, rgba(253,88,73,1), rgba(255,205,86,1));
    opacity: .85;
  }

  .faq-question{
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    padding-left: 6px; /* to balance accent bar */
  }

  /* Icon: plus/minus using CSS only */
  .faq-icon{
    width: 38px;
    height: 38px;
    border-radius: 12px;
    background: rgba(15,23,42,.06);
    position: relative;
    flex: 0 0 38px;
    transition: transform .2s ease, background .2s ease;
  }
  .faq-icon::before,
  .faq-icon::after{
    content:"";
    position:absolute;
    left: 50%;
    top: 50%;
    width: 16px;
    height: 2px;
    background: #0f172a;
    transform: translate(-50%, -50%);
    border-radius: 2px;
  }
  .faq-icon::after{
    transform: translate(-50%, -50%) rotate(90deg);
    transition: opacity .2s ease;
    opacity: 1;
  }

  /* Expanded state (button NOT collapsed) => show minus */
  .faq-btn:not(.collapsed) .faq-icon{
    background: rgba(253,88,73,.12);
    transform: rotate(180deg);
  }
  .faq-btn:not(.collapsed) .faq-icon::after{
    opacity: 0; /* hide vertical bar => minus */
  }

  /* Body */
  .faq-card-body{
    padding: 0 20px 18px 20px;
    color: #475569;
    font-size: .98rem;
    line-height: 1.7;
  }

  /* Hover/focus */
  .faq-btn:hover .faq-icon{ background: rgba(15,23,42,.09); }
  .faq-btn:focus{ outline: none; }
  .faq-btn:focus-visible{
    outline: 3px solid rgba(253,88,73,.35);
    outline-offset: 3px;
    border-radius: 16px;
  }

  /* Mobile tweaks */
  @media (max-width: 576px){
    .faq-title{ font-size: 1.6rem; }
    .faq-btn{ padding: 16px; }
    .faq-card-body{ padding: 0 16px 16px 16px; }
  }
</style>



@endsection