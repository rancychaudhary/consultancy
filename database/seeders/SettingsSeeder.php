<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Settings;
// use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $items = [

            //Global
            ['site_title', 'Podcast'],
            ['site_title_full', 'Podcast'],
            ['site_main_logo', 'admin/assets/img/logo.png'],
            ['site_fav_icon', 'admin/assets/img/favicon.png'],
            ['site_footer_logo', 'admin/assets/img/logo.png'],
            ['site_contact_image', 'admin/assets/img/logo.png'],
            ['site_information', 'podcast'],

            ['site_phone', '9802358608'],
            ['whatsapp_number', '9802358608'],
            ['site_email', 'paradiseit@gmail.com'],
            ['site_location', 'chitwan, Nepal'],
            ['site_location_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.49524127591!2d84.43225601102095!3d27.67108442699076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2cf4e503f5%3A0x646e7560d153610d!2sParadise%20InfoTech%2C%20Chitwan!5e0!3m2!1sen!2snp!4v1754412740070!5m2!1sen!2snp'],
            ['site_mail', 'mail.podcast.com.np'],
            ['site_url', '/'],

            ['site_copyright', 'Copyright © paradise info tech| All Rights Reserved. Made with ❤️ by  Paradise InfoTech'],


            //contact

            ['contact_title', 'Contact'],
            ['contact_image', 'admin/assets/img/logo.png'],

            ['contact_banner_image', 'admin/assets/img/logo.png'],
            ['contact_section_title', "Get In Touch"],
            ['contact_description', 'podcast'],


            ['contact_location', 'Chitwan, Kathmandu'],
            ['contact_email', 'info@podcast.com'],
            ['contact_phone', '+9779803997680'],
            ['contact_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.49524127591!2d84.43225601102095!3d27.67108442699076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2cf4e503f5%3A0x646e7560d153610d!2sParadise%20InfoTech%2C%20Chitwan!5e0!3m2!1sen!2snp!4v1754412740070!5m2!1sen!2snp'],

            ['contact_seo_title', 'podcast'],
            ['contact_seo_description', 'podcast'],
            ['contact_seo_keywords', 'podcast'],
            ['contact_seo_schema', 'podcast'],

            ['contactform_title', 'Leave us your info'],
            ['contactform_description', 'Provide your details, and well schedule a call at your convenience.'],


            // Homepage

            ['homepage_title', "Under the Stars:An Educational Journey"],
            ['homepage_small_title', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],
            ['homepage_image', 'admin/assets/img/logo.png'],
            ['homepage_description', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],

            ['home_cta_1_text', 'Get in Touch'],
            ['home_cta_1_link', '/contact-us'],
            ['home_cta_2_text', 'View Courses'],
            ['home_cta_2_link', '/our-courses'],

            ['homepage_seo_title', 'podcast Education Foundation'],
            ['homepage_seo_keywords', 'podcast'],
            ['homepage_meta_description', 'podcast'],
            ['homepage_seo_schema', 'podcast'],

            ['homepage_slider_cta_button', 'Get in Touch'],
            ['homepage_slider_event_button', 'Event Calendar'],

            ['universities_title', 'Our Partner Universities'],
            ['universities_subtitle', "Dive into Excitement with Our Latest universities!"],
            ['universities_description', ""],
            ['universities_link', '/about'],
            ['universities_button', 'See All'],
            ['home_universities', ""],

            ['countries_title', 'Countries We Deal With'],
            ['countries_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['countries_description', "Dive into Excitement with Our Latest countries!"],
            ['countries_link', '/about'],
            ['countries_button', 'See All'],
            ['home_countries', ""],


            ['whyChooseUs_title', 'Why Choose Us?'],
            ['whyChooseUs_subtitle', "Our education consultants can support with excellence."],
            ['whyChooseUs_image', 'admin/assets/img/logo.png'],
            ['whyChooseUs_description', "Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since 2003 with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US."],
            ['whyChooseUs_link', '/about'],
            ['whyChooseUs_button', 'See All'],

            //Homecounter
            ['counter_title', 'Monthly Listner'],
            ['counter_countdown', '5,00,000'],
            ['counter_image', 'admin/assets/img/logo.png'],
            ['counter_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['counter_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['counter_link', '/blogs'],
            ['counter_button', 'See All'],
            ['counter', ""],

            // ['home_counter_scholarship_title', 'Scholarship Approved'],
            // ['home_counter_scholarship', '1000'],
            // ['home_counter_enrolled_title', 'Enrolled in IELTS/PTE classes'],
            // ['home_counter_enrolled', '2500'],
            // ['home_counter_affilated_title', 'Affilated College'],
            // ['home_counter_affilated', '300'],


            ['teams_title', 'Our Teams'],
            ['teams_subtitle', "Choose your next study destination."],
            ['teams_image', 'admin/assets/img/logo.png'],
            ['teams_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['teams_link', '/teams'],
            ['teams_button', 'See All'],
            ['home_teams', ""],


            ['services_title', 'Our Services'],
            ['services_subtitle', "Choose your next study destination."],
            ['services_image', 'admin/assets/img/logo.png'],
            ['services_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['services_link', '/services'],
            ['services_button', 'See All'],
            ['home_services', ""],

            ['aboutus_title', 'About Us'],
            ['aboutus_subtitle', "Dive into Excitement with Our Latest aboutus!"],
            ['aboutus_image', 'admin/assets/img/logo.png'],
            ['aboutus_description', "Dive into Excitement with Our Latest aboutus!"],
            ['aboutus_link', '/about'],
            ['aboutus_button', 'See All'],

            ['contact_form_title', 'Interested To Join Our Classes?'],
            ['contact_form_subtitle', 'Fill the form given to book for our IELTS/PTE classes.'],
            ['contact_form_description', 'Fill the form given to book for our IELTS/PTE classes.'],

            ['courses_title', 'Our Courses'],
            ['courses_subtitle', "Choose your next study destination."],
            ['courses_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['courses_link', '/courses'],
            ['courses_button', 'See All'],
            ['home_courses', ""],


            ['testioninal_title', 'Our Testimonials'],
            ['testioninal_subtitle', "Choose your next study destination."],
            ['testioninal_image', 'admin/assets/img/logo.png'],
            ['testioninal_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['testioninal_link', '/testimonals'],
            ['testioninal_button', 'See All'],
            ['home_testioninals', ""],


            ['listen_title', 'Our listen'],
            ['listen_subtitle', "Choose your next study destination."],
            ['listen_image', 'admin/assets/img/logo.png'],
            ['listen_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['listen_link', '/listen'],
            ['listen_button', 'See All'],
            ['home_listen', ""],

            ['blogs_title', 'Our Blogs'],
            ['blogs_subtitle', "Choose your next study destination."],
            ['blogs_image', 'admin/assets/img/logo.png'],
            ['blogs_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['blogs_link', '/blogs'],
            ['blogs_button', 'See All'],
            ['home_blogs', ""],


        ];

        if (count($items)) {

            foreach ($items as $item) {

                Settings::create([
                    'key' => $item[0],
                    'value' => $item[1]
                ]);
            }
        }
    }
}
