<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row">

        <ul class="nav nav-pills mb-3" role="tablist">

            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#home_hero" aria-controls="home_hero" aria-selected="true">
                    Home Hero
                </button>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#counter"
                    aria-controls="counter" aria-selected="false">
                    Counter
                </button>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#aboutus"
                    aria-controls="aboutus" aria-selected="false">
                    About Us
                </button>
            </li>
               <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#universities"
                    aria-controls="universities" aria-selected="false">
                    Universities
                </button>
            </li>
               <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#countries"
                    aria-controls="countries" aria-selected="false">
                    Countries
                </button>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#services"
                    aria-controls="services" aria-selected="false">
                    Services
                </button>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#teams"
                    aria-controls="teams" aria-selected="false">
                    Teams
                </button>
            </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#courses"
                    aria-controls="courses" aria-selected="false">
                    Courses
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#testimonials" aria-controls="testimonials" aria-selected="false">
                    Testimonials
                </button>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#blogs"
                    aria-controls="blogs" aria-selected="false">
                    Blogs
                </button>
            </li>

        </ul>

        <div class="tab-content">



            {{-- Home Her0 --}}
            @include('admin.settings.includes.home.homehero')

            {{-- Counter --}}
            @include('admin.settings.includes.home.counter')

            {{-- About Us --}}
            @include('admin.settings.includes.home.aboutus')

            {{-- Universities --}}
            @include('admin.settings.includes.home.universities')

            {{-- Countries --}}
            @include('admin.settings.includes.home.countries')


            {{-- Services --}}
            @include('admin.settings.includes.home.services')

            {{-- Teams --}}
            @include('admin.settings.includes.home.teams')

            {{-- Course --}}
            @include('admin.settings.includes.home.courses')


            {{-- Blogs --}}
            @include('admin.settings.includes.home.blog')

            {{-- Testimonials --}}
            @include('admin.settings.includes.home.testimonials')

            {{-- Top_listen --}}
            {{-- @include('admin.settings.includes.home.listen') --}}

             {{-- Whychooseus --}}
            {{-- @include('admin.settings.includes.home.whychooseus') --}}


        </div>

    </div>
</div>
{{-- <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">


    <div class="tab-pane fade" id="v-pills-global" role="tabpanel" aria-labelledby="v-pills-global-tab">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_logo">Site Main Logo</label>
                    <div class="custom-file">
                        <div class="dropify-wrapper has-preview">
                            <div class="dropify-message"><span class="file-icon">
                                    <p>Drag and drop a file here or click</p>
                                </span>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader" style="display: none;"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div><input type="file" name="site_main_logo" class="mainlogo" id="site_main_logo"
                                data-show-remove="false"
                                data-default-file="/storage/setting/1727708515-91-bright mind logo.png">
                            <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img
                                        src="/storage/setting/1727708515-91-bright mind logo.png"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span
                                                class="dropify-filename-inner">1727708515-91-bright mind
                                                logo.png</span></p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_fav_icon">Site Fav Icon</label>
                    <div class="custom-file">
                        <div class="dropify-wrapper has-preview">
                            <div class="dropify-message"><span class="file-icon">
                                    <p>Drag and drop a file here or click</p>
                                </span>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader" style="display: none;"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div><input type="file" name="site_fav_icon" class="site_fav_icon dropify"
                                id="site_fav_icon" data-show-remove="false"
                                data-default-file="/storage/setting/1727107130-33-brightmindlogo-circle.png">
                            <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img
                                        src="/storage/setting/1727107130-33-brightmindlogo-circle.png"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span
                                                class="dropify-filename-inner">1727107130-33-brightmindlogo-circle.png</span>
                                        </p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_footer_logo">Site Footer Logo</label>
                    <div class="custom-file">
                        <div class="dropify-wrapper has-preview">
                            <div class="dropify-message"><span class="file-icon">
                                    <p>Drag and drop a file here or click</p>
                                </span>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader" style="display: none;"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div><input type="file" name="site_footer_logo" class="footerlogo dropify"
                                id="site_footer_logo" data-show-remove="false"
                                data-default-file="/storage/setting/1727708935-36-brightmind logo.png">
                            <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img
                                        src="/storage/setting/1727708935-36-brightmind logo.png"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span
                                                class="dropify-filename-inner">1727708935-36-brightmind logo.png</span>
                                        </p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_contact_image">Site Contact Image</label>
                    <div class="custom-file">
                        <div class="dropify-wrapper has-preview">
                            <div class="dropify-message"><span class="file-icon">
                                    <p>Drag and drop a file here or click</p>
                                </span>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader" style="display: none;"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div><input type="file" name="site_contact_image" class="Contactlogo dropify"
                                id="site_contact_image" data-show-remove="false"
                                data-default-file="admin/assets/img/logo.png">
                            <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img
                                        src="admin/assets/img/logo.png"></span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span
                                                class="dropify-filename-inner">logo.png</span></p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="" alt="">
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label for="site_information">Site Information</label>
                    <textarea name="site_information" rows="4" class="form-control br-8" placeholder="Enter Site Information">Bright Mind</textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_title">Site Title</label>
                    <input type="tel" name="site_title" value="Bright Mind" class="form-control br-8"
                        placeholder="Site Title">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_title_full">Site Title (Full)</label>
                    <input type="tel" name="site_title_full" value="Bright Mind Education Hub"
                        class="form-control br-8" placeholder="Site Full Title">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_phone">Phone Number</label>
                    <input type="tel" name="site_phone" value="01-5907931,9803146141" class="form-control br-8"
                        placeholder="Enter Phone Number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_email">Email</label>
                    <input type="email" name="site_email" value="info@brightmindedu.com" class="form-control br-8"
                        placeholder="Enter Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_location">Location</label>
                    <input type="text" name="site_location" value="Narayangopal Chowk,Kathmandu 3 ,Nepal"
                        class="form-control br-8" placeholder="Enter Location">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label for="site_location_url">Map</label>
                    <textarea name="site_location_url" rows="4" class="form-control br-8" placeholder="Enter Location Url">https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14124.854986170445!2d85.3382858!3d27.7415525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a45bdf7427%3A0xc2d8058b5d3839db!2sBright%20Mind%20Education%20Hub!5e0!3m2!1sen!2snp!4v1726138027316!5m2!1sen!2snp</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_mail">Mail</label>
                    <input type="text" name="site_mail" value="info@brightmindedu.com" class="form-control br-8"
                        placeholder="Enter Site Mail ">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="site_url">Site Url</label>
                    <input type="text" name="site_url" value="/" class="form-control br-8"
                        placeholder="Enter Site Url ">
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label for="site_copyright">Site Copyright</label>
                    <textarea name="site_copyright" rows="4" class="form-control br-8" placeholder="Enter Site Information">Copyright © Bright Mind Education Hub | All Rights Reserved. Made with ❤️ by  Paradise InfoTech</textarea>
                </div>
            </div>

        </div>
    </div>


    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="row">

            <ul class="nav nav-pills mb-3" role="tablist">

                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#home_hero" aria-controls="home_hero" aria-selected="true">
                        Home Hero
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#counter" aria-controls="counter" aria-selected="false">
                        Counter
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#aboutus" aria-controls="aboutus" aria-selected="false">
                        About Us
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#universities" aria-controls="universities" aria-selected="false">
                        Universities
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#countries" aria-controls="countries" aria-selected="false">
                        Countries
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#teams" aria-controls="countries" aria-selected="false">
                        Teams
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#services" aria-controls="services" aria-selected="false">
                        Services
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#courses" aria-controls="countries" aria-selected="false">
                        Courses
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#testimonials" aria-controls="testimonials" aria-selected="false">
                        Testimonials
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#blogs" aria-controls="blogs" aria-selected="false">
                        Blogs
                    </button>
                </li>
            </ul>

            <div class="tab-content">




                <div class="tab-pane fade active show" id="home_hero" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Home Hero Section</legend>
                        <div class="row">

                            <div class="mb-4">
                                <label for="homepage_title" class="form-label">Home Hero Title</label>
                                <textarea class="form-control" id="homepage_title" name="homepage_title" placeholder="Activities Description"
                                    rows="4">Under the Stars:An Educational Journey</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="homepage_description" class="form-label">Home Hero Description</label>
                                <textarea class="form-control" id="homepage_description" name="homepage_description"
                                    placeholder="Activities Description" rows="4">Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky</textarea>

                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-2">
                                    <label for="home_cta_1_text" class="form-label">CTA 1 Text</label>
                                    <input type="text" class="form-control" id="home_cta_1_text"
                                        name="home_cta_1_text" value="Get in Touch">
                                </div>

                                <div class="mb-2">
                                    <label for="home_cta_1_link" class="form-label">CTA 1 Link</label>
                                    <input type="text" id="home_cta_1_link" name="home_cta_1_link"
                                        class="form-control" value="/contact-us">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-2">
                                    <label for="home_cta_2_text" class="form-label">CTA 2 Text</label>
                                    <input type="text" class="form-control" id="home_cta_2_text"
                                        name="home_cta_2_text" value="Courses">
                                </div>

                                <div class="mb-2">
                                    <label for="home_cta_2_link" class="form-label">CTA 2 Link</label>
                                    <input type="text" id="home_cta_2_link" name="home_cta_2_link"
                                        class="form-control" value="/course">
                                </div>
                            </div>

                        </div>

                        <fieldset class="border p-3">
                            <legend class="float-none w-auto legend-title">Home SEO Section</legend>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mb-2">
                                        <label for="homepage_seo_title" class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" id="homepage_seo_title"
                                            name="homepage_seo_title" value="Bright Mind">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="mb-2">
                                        <label for="homepage_seo_keywords" class="form-label">SEO Keywords</label>
                                        <input type="text" class="form-control" id="homepage_seo_keywords"
                                            name="homepage_seo_keywords" value="Bright Mind">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="homepage_meta_description">SEO Description</label>
                                        <textarea name="homepage_meta_description" rows="4" class="form-control br-8" placeholder="SEO Description">Bright Mind</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="homepage_seo_schema">SEO Schema</label>
                                        <textarea name="homepage_seo_schema" rows="4" class="form-control br-8" placeholder="SEO Schema">Bright Mind</textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="counter" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Counter Section</legend>
                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <div class="mb-2">
                                    <label for="home_counter_students_title" class="form-label">Students Assisted
                                        Title </label>
                                    <input type="text" class="form-control" id="home_counter_students_title"
                                        name="home_counter_students_title" value="International Students Assisted">
                                </div>

                                <div class="mb-2">
                                    <label for="home_counter_students" class="form-label">No. of Students
                                        Assisted</label>
                                    <input type="text" id="home_counter_students" name="home_counter_students"
                                        class="form-control" value="10000">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="mb-2">
                                    <label for="home_counter_scholarship_title" class="form-label">Scholarship
                                        Approved Title </label>
                                    <input type="text" class="form-control" id="home_counter_scholarship_title"
                                        name="home_counter_scholarship_title" value="Scholarship Approved">
                                </div>

                                <div class="mb-2">
                                    <label for="home_counter_scholarship" class="form-label">No. of Scholarship
                                        Approved</label>
                                    <input type="text" id="home_counter_scholarship"
                                        name="home_counter_scholarship" class="form-control" value="1000">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="mb-2">
                                    <label for="home_counter_enrolled_title" class="form-label">Enrolled Students
                                        Title </label>
                                    <input type="text" class="form-control" id="home_counter_enrolled_title"
                                        name="home_counter_enrolled_title" value="Enrolled in IELTS/PTE classes">
                                </div>

                                <div class="mb-2">
                                    <label for="home_counter_enrolled" class="form-label">No. of Enrolled
                                        Students</label>
                                    <input type="text" id="home_counter_enrolled" name="home_counter_enrolled"
                                        class="form-control" value="2500">
                                </div>
                            </div>






                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="aboutus" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">About Us Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="aboutus_title" class="form-label">About Us Title</label>
                                <input type="text" class="form-control" id="aboutus_title" name="aboutus_title"
                                    placeholder="About Us Title" value="About Us">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="aboutus_subtitle" class="form-label">About Us Subtitle</label>
                                <input type="text" class="form-control" id="aboutus_subtitle"
                                    name="aboutus_subtitle" placeholder="About Us Subtitle"
                                    value="Dive into Excitement with Our Latest aboutus!">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="aboutus_button" class="form-label">About Us Button Text</label>
                                <input type="text" class="form-control" id="aboutus_button" name="aboutus_button"
                                    placeholder="About Us Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="aboutus_description" class="form-label">About Us Description</label>
                                <textarea class="form-control" id="aboutus_description" name="aboutus_description"
                                    placeholder="About Us Description" rows="4">Dive into Excitement with Our Latest aboutus!</textarea>

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="universities" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Our Universities Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="universities_title" class="form-label">Our Universities Title</label>
                                <input type="text" class="form-control" id="universities_title"
                                    name="universities_title" placeholder="Our Universities Title"
                                    value="Our Partner Universities">
                            </div>


                            <div class="mb-4 col-md-6">
                                <label for="universities_subtitle" class="form-label">Our Universities
                                    Subtitle</label>
                                <input type="text" class="form-control" id="universities_subtitle"
                                    name="universities_subtitle" placeholder="Our Universities Subtitle"
                                    value="Dive into Excitement with Our Latest universities!">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="universities_button" class="form-label">Our Universities Button
                                    Text</label>
                                <input type="text" class="form-control" id="universities_button"
                                    name="universities_button" placeholder="Our Universities Button Text"
                                    value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="universities_description" class="form-label">Our Universities
                                    Description</label>
                                <textarea class="form-control" id="universities_description" name="universities_description"
                                    placeholder="Our Universities Description" rows="4"></textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_universities" class="form-label">Home Universities</label>


                                <!-- choicejs -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_universities[]"
                                            id="home_universities" multiple="" class="choices__input"
                                            hidden="" tabindex="-1" data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-The University of Tokyo</option>
                                            <option value="2" data-custom-properties="[object Object]">

                                                2-University of Otago</option>
                                            <option value="3" data-custom-properties="[object Object]">

                                                3-Deakin University</option>
                                            <option value="4" data-custom-properties="[object Object]">

                                                4-The University of Chicago</option>
                                            <option value="6" data-custom-properties="[object Object]">

                                                6-Dong-A University</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-The University of Tokyo<button type="button"
                                                    class="choices__button" aria-label="Remove item: '1'"
                                                    data-button="">Remove item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="2"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                2-University of Otago<button type="button" class="choices__button"
                                                    aria-label="Remove item: '2'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="3" data-value="3"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                3-Deakin University<button type="button" class="choices__button"
                                                    aria-label="Remove item: '3'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="4" data-value="4"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                4-The University of Chicago<button type="button"
                                                    class="choices__button" aria-label="Remove item: '4'"
                                                    data-button="">Remove item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="5" data-value="6"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                6-Dong-A University<button type="button" class="choices__button"
                                                    aria-label="Remove item: '6'" data-button="">Remove item</button>
                                            </div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div class="choices__item choices__item--choice has-no-choices">No choices
                                                to choose from</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choicejs -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="countries" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Country Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="countries_title" class="form-label">Country Title</label>
                                <input type="text" class="form-control" id="countries_title"
                                    name="countries_title" placeholder="Country Title"
                                    value="Countries We Deal With">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="countries_subtitle" class="form-label">Country Subtitle</label>
                                <input type="text" class="form-control" id="countries_subtitle"
                                    name="countries_subtitle" placeholder="Country Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="countries_button" class="form-label">Country Button Text</label>
                                <input type="text" class="form-control" id="countries_button"
                                    name="countries_button" placeholder="Country Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="countries_description" class="form-label">Country Description</label>
                                <textarea class="form-control" id="countries_description" name="countries_description"
                                    placeholder="Country Description" rows="4">Dive into Excitement with Our Latest countries!</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_countries" class="form-label">Home countries</label>


                                <!--  choice js -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_countries[]" id="home_countries"
                                            multiple="" class="choices__input" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-Denmark</option>
                                            <option value="2" data-custom-properties="[object Object]">

                                                2-Australia</option>
                                            <option value="3" data-custom-properties="[object Object]">

                                                3-Canada</option>
                                            <option value="4" data-custom-properties="[object Object]">

                                                4-United States</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-Denmark<button type="button" class="choices__button"
                                                    aria-label="Remove item: '1'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="2"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                2-Australia<button type="button" class="choices__button"
                                                    aria-label="Remove item: '2'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="3" data-value="3"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                3-Canada<button type="button" class="choices__button"
                                                    aria-label="Remove item: '3'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="4" data-value="4"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                4-United States<button type="button" class="choices__button"
                                                    aria-label="Remove item: '4'" data-button="">Remove item</button>
                                            </div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div id="choices--home_countries-item-choice-5"
                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="5" data-value="5"
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">

                                                5-United Kingdom</div>
                                            <div id="choices--home_countries-item-choice-6"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="6" data-value="6"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                6-South Korea</div>
                                            <div id="choices--home_countries-item-choice-7"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="7" data-value="7"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                7-Malta</div>
                                            <div id="choices--home_countries-item-choice-8"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="8" data-value="8"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                8-Greece</div>
                                            <div id="choices--home_countries-item-choice-9"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="9" data-value="9"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                9-New ZeaLand</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choices js -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="teams" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Team Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="teams_title" class="form-label">Team Title</label>
                                <input type="text" class="form-control" id="teams_title" name="teams_title"
                                    placeholder="Team Title" value="Our Teams">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="teams_subtitle" class="form-label">Team Subtitle</label>
                                <input type="text" class="form-control" id="teams_subtitle" name="teams_subtitle"
                                    placeholder="Team Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="teams_button" class="form-label">Team Button Text</label>
                                <input type="text" class="form-control" id="teams_button" name="teams_button"
                                    placeholder="Team Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="teams_description" class="form-label">Team Description</label>
                                <textarea class="form-control" id="teams_description" name="teams_description" placeholder="Team Description"
                                    rows="4">Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_teams" class="form-label">Home teams</label>


                                <!--  choice js -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_teams[]" id="home_teams"
                                            multiple="" class="choices__input" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-Shyam Mazor</option>
                                            <option value="2" data-custom-properties="[object Object]">

                                                2-Sujan Maharjan</option>
                                            <option value="3" data-custom-properties="[object Object]">

                                                3-Saurav Pradhan</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-Shyam Mazor<button type="button" class="choices__button"
                                                    aria-label="Remove item: '1'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="2"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                2-Sujan Maharjan<button type="button" class="choices__button"
                                                    aria-label="Remove item: '2'" data-button="">Remove item</button>
                                            </div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="3" data-value="3"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                3-Saurav Pradhan<button type="button" class="choices__button"
                                                    aria-label="Remove item: '3'" data-button="">Remove item</button>
                                            </div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div class="choices__item choices__item--choice has-no-choices">No choices
                                                to choose from</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choices js -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="services" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Our Services Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="services_title" class="form-label">Our Services Title</label>
                                <input type="text" class="form-control" id="services_title" name="services_title"
                                    placeholder="Our Services Title" value="Our Services">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="services_subtitle" class="form-label">Our Services Subtitle</label>
                                <input type="text" class="form-control" id="services_subtitle"
                                    name="services_subtitle" placeholder="Our Services Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="services_button" class="form-label">Our Services Button Text</label>
                                <input type="text" class="form-control" id="services_button"
                                    name="services_button" placeholder="Our Services Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="services_description" class="form-label">Our Services Description</label>
                                <textarea class="form-control" id="services_description" name="services_description"
                                    placeholder="Our Services Description" rows="4">Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_services" class="form-label">Home services</label>


                                <!-- choicejs -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_services[]" id="home_services"
                                            multiple="" class="choices__input" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-Visa Application Processing</option>
                                            <option value="3" data-custom-properties="[object Object]">

                                                3-Test Preparation</option>
                                            <option value="4" data-custom-properties="[object Object]">

                                                4-Documentation Guidance</option>
                                            <option value="5" data-custom-properties="[object Object]">

                                                5-Financial Guidance</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-Visa Application Processing<button type="button"
                                                    class="choices__button" aria-label="Remove item: '1'"
                                                    data-button="">Remove item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="3"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                3-Test Preparation<button type="button" class="choices__button"
                                                    aria-label="Remove item: '3'" data-button="">Remove
                                                    item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="3" data-value="4"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                4-Documentation Guidance<button type="button"
                                                    class="choices__button" aria-label="Remove item: '4'"
                                                    data-button="">Remove item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="4" data-value="5"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                5-Financial Guidance<button type="button" class="choices__button"
                                                    aria-label="Remove item: '5'" data-button="">Remove
                                                    item</button></div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div class="choices__item choices__item--choice has-no-choices">No choices
                                                to choose from</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choicejs -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="courses" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Course Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="courses_title" class="form-label">Course Title</label>
                                <input type="text" class="form-control" id="courses_title"
                                    name="courses_title" placeholder="Course Title" value="Our Courses">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="courses_subtitle" class="form-label">Course Subtitle</label>
                                <input type="text" class="form-control" id="courses_subtitle"
                                    name="courses_subtitle" placeholder="Course Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="courses_button" class="form-label">Course Button Text</label>
                                <input type="text" class="form-control" id="courses_button"
                                    name="courses_button" placeholder="Course Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="courses_description" class="form-label">Course Description</label>
                                <textarea class="form-control" id="courses_description" name="courses_description"
                                    placeholder="Course Description" rows="4">Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_courses" class="form-label">Home courses</label>


                                <!--  choice js -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_courses[]" id="home_courses"
                                            multiple="" class="choices__input" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-IELTS</option>
                                            <option value="2" data-custom-properties="[object Object]">

                                                2-PTE</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-IELTS<button type="button" class="choices__button"
                                                    aria-label="Remove item: '1'" data-button="">Remove
                                                    item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="2"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                2-PTE<button type="button" class="choices__button"
                                                    aria-label="Remove item: '2'" data-button="">Remove
                                                    item</button></div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div id="choices--home_courses-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="3" data-value="3"
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">

                                                3-TOEFL</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choices js -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="testimonials" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Testimonial Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="testioninal_title" class="form-label">Testimonial Title</label>
                                <input type="text" class="form-control" id="testioninal_title"
                                    name="testioninal_title" placeholder="Testimonial Title"
                                    value="Our Testimonials">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="testioninal_subtitle" class="form-label">Testimonial Subtitle</label>
                                <input type="text" class="form-control" id="testioninal_subtitle"
                                    name="testioninal_subtitle" placeholder="Testimonial Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="testioninal_button" class="form-label">Testimonial Button Text</label>
                                <input type="text" class="form-control" id="testioninal_button"
                                    name="testioninal_button" placeholder="Testimonial Button Text"
                                    value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="testioninal_description" class="form-label">Testimonial
                                    Description</label>
                                <textarea class="form-control" id="testioninal_description" name="testioninal_description"
                                    placeholder="Testimonial Description" rows="4">Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_testioninals" class="form-label">Home Testimonials</label>


                                <!--choicejs -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_testioninals[]"
                                            id="home_testioninals" multiple="" class="choices__input"
                                            hidden="" tabindex="-1" data-choice="active"></select>
                                        <div class="choices__list choices__list--multiple"></div><input
                                            type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div id="choices--home_testioninals-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="1" data-value="1"
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">

                                                1-Sahil</div>
                                            <div id="choices--home_testioninals-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="2"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                2-Kavi Raj</div>
                                            <div id="choices--home_testioninals-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3" data-value="4"
                                                data-select-text="Press to select" data-choice-selectable="">

                                                4-Prashish Dubey</div>
                                        </div>
                                    </div>
                                </div>
                                <!--choices js  -->

                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="tab-pane fade" id="blogs" role="tabpanel">

                    <fieldset class="border p-3">
                        <legend class="float-none w-auto legend-title">Blog Section</legend>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="blogs_title" class="form-label">Blog Title</label>
                                <input type="text" class="form-control" id="blogs_title" name="blogs_title"
                                    placeholder="Blog Title" value="Our Blogs">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="blogs_subtitle" class="form-label">Blog Subtitle</label>
                                <input type="text" class="form-control" id="blogs_subtitle"
                                    name="blogs_subtitle" placeholder="Blog Subtitle"
                                    value="Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="blogs_button" class="form-label">Blog Button Text</label>
                                <input type="text" class="form-control" id="blogs_button" name="blogs_button"
                                    placeholder="Blog Button Text" value="See All">
                            </div>



                            <div class="mb-4">
                                <label for="blogs_description" class="form-label">Blog Description</label>
                                <textarea class="form-control" id="blogs_description" name="blogs_description" placeholder="Blog Description"
                                    rows="4">Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations.</textarea>

                            </div>

                            <div class="mb-4">
                                <label for="home_blogs" class="form-label">Home Blogs</label>


                                <!--  choice js -->
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select name="home_blogs[]" id="home_blogs"
                                            multiple="" class="choices__input" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="1" data-custom-properties="[object Object]">

                                                1-Everything you must know about the NOC -No Objection Certificate
                                            </option>
                                            <option value="2" data-custom-properties="[object Object]">

                                                2-Bank loans for International students to study abroad</option>
                                            <option value="3" data-custom-properties="[object Object]">

                                                3-Top 10 Civil Engineering Courses to Study Abroad</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="1"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                1-Everything you must know about the NOC -No Objection
                                                Certificate<button type="button" class="choices__button"
                                                    aria-label="Remove item: '1'" data-button="">Remove
                                                    item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="2"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                2-Bank loans for International students to study abroad<button
                                                    type="button" class="choices__button"
                                                    aria-label="Remove item: '2'" data-button="">Remove
                                                    item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="3" data-value="3"
                                                data-custom-properties="[object Object]" aria-selected="true"
                                                data-deletable="">

                                                3-Top 10 Civil Engineering Courses to Study Abroad<button
                                                    type="button" class="choices__button"
                                                    aria-label="Remove item: '3'" data-button="">Remove
                                                    item</button></div>
                                        </div><input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="null">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div class="choices__item choices__item--choice has-no-choices">No choices
                                                to choose from</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- choices js -->

                            </div>

                        </div>
                    </fieldset>
                </div>


            </div>

        </div>
    </div>



    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Contact Us </legend>
            <div class="row">

                <div class="mb-4 col-md-6">
                    <label for="contact_title" class="form-label">Contact Title</label>
                    <input type="text" class="form-control" id="contact_title" name="contact_title"
                        placeholder="Contact Title" value="Contact">
                </div>



                <div class="mb-4 col-md-12">
                    <label for="contact_description" class="form-label">Contact Description</label>
                    <textarea name="contact_description" rows="2" class="form-control br-8" placeholder="Contact Description">Bright Mind Education Hub</textarea>

                </div>

                <div class="mb-4 col-md-6">
                    <label for="contact_location" class="form-label">Contact location</label>
                    <input type="text" class="form-control" id="contact_location" name="contact_location"
                        placeholder="Contact Location" value="Narayangopal Chowk,Kathmandu 3 ,Nepal">
                </div>

                <div class="mb-4 col-md-6">
                    <label for="contact_email" class="form-label">Contact email</label>
                    <input type="text" class="form-control" id="contact_email" name="contact_email"
                        placeholder="Contact Email" value="info@brightmindedu.com">
                </div>

                <div class="mb-4 col-md-6">
                    <label for="contact_phone" class="form-label">Contact phone</label>
                    <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                        placeholder="Contact Phone" value="01-5907931,9803146141">
                </div>





            </div>
        </fieldset>

    </div>

</div> --}}

@push('js')
    <script>
        const selectElements = document.querySelectorAll('select[multiple]');

        selectElements.forEach((select) => {
            new Choices(select, {
                removeItemButton: true,
                maxItemCount: 10,
                searchResultLimit: 5,
                renderChoiceLimit: 5,
                allowHTML: true,

            });
        });
    </script>
@endpush
