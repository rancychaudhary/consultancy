@extends('layouts.admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Notification alerts -->
        <style>
            .z-for-alert {
                z-index: 10000 !important;
            }
        </style>



        <!-- Layout Demo -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0 text-capitalize">dashboard</h5>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('country.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-globe-alt icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">countries</span>
                                    <h3 class="card-title mb-2 link-primary">11</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('course.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-book icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">courses</span>
                                    <h3 class="card-title mb-2 link-primary">3</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('enquiry.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-question-mark icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">Student Enquiries</span>
                                    <h3 class="card-title mb-2 link-primary">367</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('blog.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-news icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">blogs</span>
                                    <h3 class="card-title mb-2 link-primary">3</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('pages.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-copy-alt icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">pages</span>
                                    <h3 class="card-title mb-2 link-primary">16</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-support icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">inquiries</span>
                                    <h3 class="card-title mb-2 link-primary">1763</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('service.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-server icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">services</span>
                                    <h3 class="card-title mb-2 link-primary">4</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('popup.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-copy icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">popups</span>
                                    <h3 class="card-title mb-2 link-primary">0</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('team.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-group icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">teams</span>
                                    <h3 class="card-title mb-2 link-primary">3</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('testimonial.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-message-dots icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">testimonials</span>
                                    <h3 class="card-title mb-2 link-primary">3</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('slider.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-slider icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">sliders</span>
                                    <h3 class="card-title mb-2 link-primary">1</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="card">
                            <a href="{{route('admin.setting.index')}}" class="text-decoration-none link-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx bx-cog icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">Settings</span>
                                    <h3 class="card-title mb-2 link-primary">N/A</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ Layout Demo -->
    </div>
@endsection
