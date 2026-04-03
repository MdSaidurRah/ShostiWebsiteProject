@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Team Area Start -->
<section class="team-area page-content section-padding">
    <div class="container">

        <!-- Team Grid -->
        <div class="row mt-5 g-4">

            <!-- Member 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="{{ static_asset('website/assets/img/team/member-1.jpg') }}"
                             alt="Team Member"
                             class="img-fluid">
                    </div>

                    <div class="team-card-body">
                        <h5 class="mb-1">Architect Md. Shostir R. Chowdhury</h5>
                        <p class="text-muted mb-2">Founder / Principal Architect</p>

                        <p class="team-card-text">
                            Leads the studio with a strong design vision focused on timeless, functional, and sustainable spaces.
                        </p>

                        <div class="team-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="{{ static_asset('website/assets/img/team/member-2.jpg') }}"
                             alt="Team Member"
                             class="img-fluid">
                    </div>

                    <div class="team-card-body">
                        <h5 class="mb-1">Team Member Name</h5>
                        <p class="text-muted mb-2">Senior Architect</p>

                        <p class="team-card-text">
                            Specializes in architectural planning and project execution with attention to details and client needs.
                        </p>

                        <div class="team-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="{{ static_asset('website/assets/img/team/member-3.jpg') }}"
                             alt="Team Member"
                             class="img-fluid">
                    </div>

                    <div class="team-card-body">
                        <h5 class="mb-1">Team Member Name</h5>
                        <p class="text-muted mb-2">Interior Designer</p>

                        <p class="team-card-text">
                            Crafts elegant interiors that balance aesthetics and functionality, tailored to each client’s lifestyle.
                        </p>

                        <div class="team-social">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Team Area End -->

<style>
    .team-image-wrapper {
        position: relative;
    }

    .team-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 15px 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .team-card {
        background: #fff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
        height: 100%;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 34px rgba(0, 0, 0, 0.12);
    }

    .team-card-img img {
        width: 100%;
        height: 280px;
        object-fit: cover;
    }

    .team-card-body {
        padding: 18px 18px 16px;
    }

    .team-card-text {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 14px;
        color: #444;
    }

    .team-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid rgba(0, 0, 0, 0.08);
        margin-right: 8px;
        color: #111;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .team-social a:hover {
        transform: translateY(-2px);
        border-color: rgba(0, 0, 0, 0.18);
    }
</style>

@endsection