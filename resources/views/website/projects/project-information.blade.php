@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Page Content Start -->
<section class="page-content">
    <div class="our-info-area pt-100 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">

            <div class="row mb-50">

                <!-- Left Side -->
                <div class="col-12 col-md-4 text-center">
                    <img src="{{ url($projects[0]->project_photo) }}" alt="Main Image" class="img-fluid rounded shadow">
                    <h2 class="mt-3">{{ $projects[0]->name }}</h2>
                    <h4 class="text-muted">{{ $projects[0]->project_type }} / {{ $projects[0]->project_category }}</h4>
                </div>

                <!-- Right Side -->
                <div class="col-12 col-md-8">

                    <h4 class="mb-4 text-center">Project Photos</h4>

                    <div class="row">

                        @if($projectPhotos->count() > 0)

                            @foreach($projectPhotos as $index => $photo)
                            <div class="col-md-6 mb-3">
                                <div class="card shadow-sm">
                                    <img src="{{ url($photo->photo_url) }}"
                                         class="card-img-top lightbox-image"
                                         data-index="{{ $index }}"
                                         data-url="{{ url($photo->photo_url) }}"
                                         style="height: 160px; object-fit: cover; cursor: pointer;">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $photo->photo_title }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        @else
                            <p class="text-muted mt-4">No additional photos uploaded for this project.</p>
                        @endif

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- Page Content End -->


<!-- ====================== LIGHTBOX OVERLAY ====================== -->
<style>
    .lightbox-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 99999;
    }
    .lightbox-overlay img {
        max-width: 90%;
        max-height: 85vh;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(255,255,255,0.3);
    }
    .lightbox-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 40px;
        color: white;
        cursor: pointer;
        padding: 10px;
        user-select: none;
    }
    .lightbox-prev { left: 20px; }
    .lightbox-next { right: 20px; }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 45px;
        color: white;
        cursor: pointer;
        font-weight: bold;
    }
</style>

<div class="lightbox-overlay" id="lightbox">
    <span class="lightbox-close">&times;</span>
    <span class="lightbox-btn lightbox-prev">&#10094;</span>
    <img id="lightboxImage" src="">
    <span class="lightbox-btn lightbox-next">&#10095;</span>
</div>

<!-- ====================== LIGHTBOX SCRIPT ====================== -->
<script>
    let photos = @json($projectPhotos->pluck('photo_url'));
    let currentIndex = 0;

    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImage');

    document.querySelectorAll('.lightbox-image').forEach((img, idx) => {
        img.addEventListener('click', () => {
            currentIndex = idx;
            showImage();
            lightbox.style.display = 'flex';
        });
    });

    function showImage() {
        lightboxImg.src = "{{ url('/') }}/" + photos[currentIndex];
    }

    document.querySelector('.lightbox-close').onclick = () => {
        lightbox.style.display = 'none';
    };

    document.querySelector('.lightbox-next').onclick = () => {
        currentIndex = (currentIndex + 1) % photos.length;
        showImage();
    };

    document.querySelector('.lightbox-prev').onclick = () => {
        currentIndex = (currentIndex - 1 + photos.length) % photos.length;
        showImage();
    };

    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });
</script>

@endsection