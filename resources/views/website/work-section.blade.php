<style>
    .consult-form input,
    .consult-form select,
    .consult-form textarea {
        border: 1px solid #dce5dc;
        padding: 12px 14px;
        font-size: 15px;
        border-radius: 3px;
        box-shadow: none;
    }

    .consult-form input:focus,
    .consult-form select:focus,
    .consult-form textarea:focus {
        border-color: #222;
        outline: none;
        box-shadow: none;
    }

    .btn-submit {
        background: #1c2638;
        color: #fff;
        font-weight: 600;
        padding: 14px;
        border: none;
        border-radius: 3px;
        transition: 0.3s;
    }

    .btn-submit:hover {
        background: #000;
    }
</style>

<!-- Want To work -->
<section class="wantToWork-area w-padding2">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <!-- Left Text -->
            <div class="col-xl-7 col-lg-7 col-md-12 mb-4 mb-lg-0">
                <div class="wantToWork-caption wantToWork-caption2">
                    <h2>Are you Searching For a First-Class Consultant?</h2>
                    <p class="text-muted mt-3">
                        Fill up the form and our team will contact you shortly.
                    </p>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-xl-5 col-lg-5 col-md-12">

                <form action="{{ url('/submit-consultation') }}" method="POST" class="consult-form">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control"
                               placeholder="Name" required>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control"
                               placeholder="Your Phone Number" required>
                    </div>

                    <!-- Location -->
                    <div class="mb-3">
                        <input type="text" name="location" class="form-control"
                               placeholder="Project Location" required>
                    </div>

                    <!-- Project Size -->
                    <div class="mb-3">
                        <input type="text" name="size" class="form-control"
                               placeholder="Project Size">
                    </div>

                    <!-- Project Type Dropdown -->
                    <div class="mb-3">
                        <select name="type" class="form-select" required>
                            <option value="" selected disabled>Project Type</option>
                            <option value="Interior Design">Interior Design</option>
                            <option value="Exterior Design">Exterior Design</option>
                            <option value="Architectural Consultancy">Architectural Consultancy</option>
                            <option value="Construction">Construction</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <textarea name="message" rows="4" class="form-control"
                                  placeholder="Your Message"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="btn-submit w-100">
                            SUBMIT
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
<!-- Want To work End -->
