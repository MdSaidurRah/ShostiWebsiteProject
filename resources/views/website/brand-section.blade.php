<!-- Brand Area Start -->
<section class="brand-area py-5">
    <div class="container">

                <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="font-size:32px;"> Trusted by brands</h2>
            <p class="text-muted mt-2">
                 Some of the clients & partners we work with.
            </p>
        </div>


        <div class="brand-wrap">
            @foreach($partnershipBrands as $brand)
                <div class="brand-item">
                    <img src="{{ url($brand->company_logo) }}" alt="Brand 1">
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- Brand Area End -->

<style>
    .brand-area { background: #fff; }

    .brand-wrap{
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 14px;
        padding: 18px;
        border: 1px solid #e9ecef;
        border-radius: 14px;
        background: #fff;
    }

    .brand-item{
        display:flex;
        align-items:center;
        justify-content:center;
        padding: 14px 10px;
        border-radius: 12px;
        background: #f8f9fa;
        border: 1px solid #eef1f4;
        transition: .2s ease;
        min-height: 72px;
    }

    .brand-item img
    {
      
    /* max-height: 34px; */
    max-width: 60%;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: .8;
    transition: .2s ease;

    }

    .brand-item:hover{
        background: #fff;
        border-color: #dee2e6;
        transform: translateY(-2px);
    }
    .brand-item:hover img{
        filter: grayscale(0%);
        opacity: 1;
    }

    @media (max-width: 992px){
        .brand-wrap{ grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 576px){
        .brand-wrap{ grid-template-columns: repeat(2, 1fr); }
    }
</style>