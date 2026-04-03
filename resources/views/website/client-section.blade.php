<!-- Client Section Start -->
<section class="client-section py-5">
    <div class="container">

            <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="font-size:32px;"> Our Clients</h2>
            <p class="text-muted mt-2">
                 List of our happy clients
            </p>
        </div>

        <!-- Client Logos -->
        <div class="client-scroll">
            @foreach($businessClients as $client)
                <a href="#" class="client-item" aria-label="Client 1">
                    <img src="{{ url($client->company_logo) }}" alt="Client 1">
                </a>
            @endforeach
        </div>

    </div>
</section>
<!-- Client Section End -->

<style>
    .client-section { background: #fff; }

    .client-scroll{
        display:flex;
        gap: 14px;
        padding: 14px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        background: #fff;
    }

    .client-scroll::-webkit-scrollbar{ height: 8px; }
    .client-scroll::-webkit-scrollbar-thumb{ background: #dfe3e7; border-radius: 10px; }

    .client-item{
        flex: 0 0 170px;
        scroll-snap-align: start;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 14px 10px;
        /* border-radius: 12px; */
        /* background: #f8f9fa; */
        /* border: 1px solid #eef1f4; */
        min-height: 74px;
        text-decoration: none;
        transition: .2s ease;
    }

    .client-item img{
        width: 100%;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: .85;
        transition: .2s ease;
    }

    .client-item:hover{
        background:#fff;
        border-color:#dee2e6;
        transform: translateY(-2px);
    }
    .client-item:hover img{
        filter: grayscale(0%);
        opacity: 1;
    }

    @media (max-width: 576px){
        .client-item{ flex-basis: 150px; }
        .client-item img{ max-height: 30px; }
    }
</style>