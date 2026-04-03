<footer class="site-footer">
    <div class="container py-5">

        <div class="row gy-5">

            <!-- Logo & Contact -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('/') }}" class="footer-logo d-inline-block mb-3">
                    <img src="{{ static_asset('website/assets/img/logo/logo2_footer.png') }}"
                         alt="Shosti Arc Studio" class="img-fluid" >
                </a>

                <p class="footer-tagline">
                    Your Vision — Our Expertise.
                </p>

                <div class="footer-contact mt-4">
                    <div class="mb-3">
                        <div class="footer-label">Phone</div>
                        <a href="tel:+8801737797773" class="footer-link d-block">+88 01737797773</a>
                        <a href="tel:+8801410097773" class="footer-link d-block">+88 01410097773</a>
                    </div>

                    <div>
                        <div class="footer-label">Email</div>
                        <a href="mailto:shosti.arcstudio@gmail.com" class="footer-link">
                            info@shostiarcstudio.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Office Address</h6>
                <p class="footer-text">
                    
                    H: 820, L: 03, Makka Tower<br/> Begum Rokeya Sharani <br/>
                    West Shewrapara <br/>
                    Mirpur, Dhaka - 1216<br/>
                    <br/>
                    The Middle of Shewrapara Metro Station, Piller No: 312 <br/>
                  
                                      
                </p>
            </div>
            
           



            <!-- Important Links -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Important Links</h6>
                <ul class="footer-menu">
                    <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms-of-use') }}">Terms of Use</a></li>
                    <li><a href="{{ url('/site-map') }}">Site Map</a></li>
                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                </ul>
            </div>
            
             <!-- Important Links -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Legal Information</h6>
                <ul class="footer-menu">
                    <li><a href="{{ url('/terms-of-use') }}">Trade License No. <br> TRAD/DNCC/040116/2025</a></li>
                    <li><a href="{{ url('/privacy-policy') }}">TIN <br> 449308880231</a></li>
                    
                
                </ul>
            </div>
            
            
        </div>

        <hr class="footer-divider">

        <!-- Bottom Row -->
        <div class="row align-items-center gy-3">
            <div class="col-lg-8">
                <p class="footer-copy mb-0">
                    &copy; <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Developed by
                    <a href="https://eduinntech.com" target="_blank" class="footer-link">EduINNTECH</a>
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <div class="footer-social">
                    <span class="flow-us me-2 small">Follow Us</span>
                    <!--<a href="#"><i class="icon fab fa-twitter"></i></a>-->
                    <a href="https://www.facebook.com/shostiarcstudiobd" target="_blank"><i class="icon fab fa-facebook-f"></i></a>
                    <!--<a href="#"><i class="icon fas fa-globe"></i></a>-->
                    <!--<a href="#"><i class="icon fab fa-instagram"></i></a>-->
                </div>
            </div>
        </div>

    </div>
</footer>


<style>
/* ============================= */
/* FOOTER MAIN BACKGROUND */
/* ============================= */
.site-footer{
    background: linear-gradient(
        135deg,
        var(--light-pine-green) 0%,        /* deeper gray */
        var(--deep-pine-green) 100%       /* stronger green */
    );
    border-top: 1px solid #cfe3d7;

}

/* Logo */
.footer-logo img{
    max-height:55px;
}

/* Tagline */
.footer-tagline{
    color:#ffffff;
    font-size:0.95rem;
    line-height:1.6;
}

/* Section Headings */
.footer-heading{
    font-weight:700;
    margin-bottom:18px;
    font-size:1rem;
    letter-spacing:0.02em;
    color:#ffffff;
}

/* Labels */
.footer-label{
    font-size:0.75rem;
    text-transform:uppercase;
    letter-spacing:0.08em;
    color:#ffffff;
    margin-bottom:4px;
}

/* Address Text */
.footer-text{
    color:#ffffff;
    line-height:1.8;
    font-size:0.95rem;
}

/* Menu */
.footer-menu{
    list-style:none;
    padding:0;
    margin:0;
}

.footer-menu li{
    margin-bottom:10px;
}

.footer-menu a{
    text-decoration:none;
    color:#ffffff;
    transition:0.3s ease;
}

.footer-menu a:hover{
    color:#1f8a5b;  /* stronger green */
}

/* Links */
.footer-link{
    color:#ffffff;
    text-decoration:none;
    transition:0.3s ease;
}

.footer-link:hover{
    color:#1f8a5b;
}

/* Divider */
.footer-divider{
    margin:45px 0 30px;
    border-color:#cfe3d7;
}

/* Copyright */
.footer-copy{
    font-size:0.9rem;
    color:#ffffff;
}

/* Social Icons */
.footer-social a{
    width:38px;
    height:38px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    border:1px solid #cfe3d7;
    color:#ffffff;
    margin-left:6px;
    transition:0.3s ease;
    text-decoration:none;
    background:#ffffff;
}

.footer-social a:hover{
    background:#1f8a5b;
    border-color:#1f8a5b;
    color:#ffffff;
    transform: translateY(-2px);
}

/* Responsive spacing */
@media (max-width: 991.98px){
    .footer-divider{
        margin:30px 0 20px;
    }
}

.flow-us 
{
        color:#ffffff;
}

.icon
{
    color:var(--deep-pine-green)
}
</style>