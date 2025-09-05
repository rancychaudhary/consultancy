<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pages;

class PagesSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            [
                'id' => 1,
                'title' => 'About us',
                'short_description' => 'Who we are?',
                'description' => '<p><meta charset="utf-8"><span style="white-space:pre-wrap;">Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US.</span><meta charset="utf-8"><span style="white-space:pre-wrap;">Our education consultants can support with excellence in guidance with education and visa consultancy in this country.&nbsp;</span></p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'about-us',
                'seo_title' => 'About us',
                'seo_schema' => 'About us',
                'meta_keywords' => 'About us',
                'meta_description' => 'About us',
                'created_at' => '2024-09-20 02:16:42',
                'updated_at' => '2024-09-20 02:26:58',
            ],
            [
                'id' => 2,
                'title' => 'Why Choose Us',
                'short_description' => 'Why Choose Us',
                'description' => '<p>Why Choose Us&nbsp;</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'why-choose-us',
                'seo_title' => 'Why Choose Us',
                'seo_schema' => 'Why Choose Us',
                'meta_keywords' => 'Why Choose Us',
                'meta_description' => 'Why Choose Us',
                'created_at' => '2024-09-20 02:18:17',
                'updated_at' => '2024-09-20 02:18:17',
            ],
            [
                'id' => 3,
                'title' => 'Our Team',
                'short_description' => 'Our Team',
                'description' => '<p>Our Team</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'our-team',
                'seo_title' => 'Our Team',
                'seo_schema' => 'Our Team',
                'meta_keywords' => 'Our Team',
                'meta_description' => 'Our Team',
                'created_at' => '2024-09-20 02:18:44',
                'updated_at' => '2024-09-20 02:18:44',
            ],
            [
                'id' => 4,
                'title' => 'Faq',
                'short_description' => 'Faq',
                'description' => '<p>Faq</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'faq',
                'seo_title' => 'Faq',
                'seo_schema' => 'Faq',
                'meta_keywords' => 'Faq',
                'meta_description' => 'Faq',
                'created_at' => '2024-09-20 02:19:17',
                'updated_at' => '2024-09-20 02:19:17',
            ],
            [
                'id' => 5,
                'title' => 'Blog',
                'short_description' => 'Blog',
                'description' => '<p>Blog</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'blog',
                'seo_title' => 'Blog',
                'seo_schema' => 'Blog',
                'meta_keywords' => 'Blog',
                'meta_description' => 'Blog',
                'created_at' => '2024-09-20 02:20:56',
                'updated_at' => '2024-09-20 02:21:04',
            ],

            [
                'id' => 6,
                'title' => 'Service',
                'short_description' => 'Service',
                'description' => '<p>Service</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'service',
                'seo_title' => 'Service',
                'seo_schema' => 'Service',
                'meta_keywords' => 'Service',
                'meta_description' => 'Service',
                'created_at' => '2024-09-20 02:22:02',
                'updated_at' => '2024-09-20 02:22:02',
            ],
            [
                'id' => 7,
                'title' => 'Contact Us',
                'short_description' => 'Contact Us',
                'description' => '<p>Contact Us</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'contact-us',
                'seo_title' => 'Contact Us',
                'seo_schema' => 'Contact Us',
                'meta_keywords' => 'Contact Us',
                'meta_description' => 'Contact Us',
                'created_at' => '2024-09-20 02:22:41',
                'updated_at' => '2024-09-20 02:23:15',
            ],
            [
                'id' => 8,
                'title' => 'Register',
                'short_description' => 'Register',
                'description' => '<p>Register</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'register',
                'seo_title' => 'Register',
                'seo_schema' => 'Register',
                'meta_keywords' => 'Register',
                'meta_description' => 'Register',
                'created_at' => '2024-09-20 02:23:08',
                'updated_at' => '2024-09-20 02:23:08',
            ],

            [
                'id' => 9,
                'title' => 'Testimonial',
                'short_description' => 'Testimonial',
                'description' => '<p>Testimonial</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'testimonial',
                'seo_title' => 'Testimonial',
                'seo_schema' => 'Testimonial',
                'meta_keywords' => 'Testimonial',
                'meta_description' => 'Testimonial',
                'created_at' => '2024-09-20 02:50:37',
                'updated_at' => '2024-09-20 02:50:37',
            ],
            [
                'id' => 10,
                'title' => 'privacy',
                'short_description' => 'privacy',
                'description' => '<p>privacy</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'privacy',
                'seo_title' => 'privacy',
                'seo_schema' => 'privacy',
                'meta_keywords' => 'privacy',
                'meta_description' => 'privacy',
                'created_at' => '2024-09-20 02:50:37',
                'updated_at' => '2024-09-20 02:50:37',
            ],
            [
                'id' => 11,
                'title' => 'terms',
                'short_description' => 'terms',
                'description' => '<p>terms</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'terms',
                'seo_title' => 'terms',
                'seo_schema' => 'terms',
                'meta_keywords' => 'terms',
                'meta_description' => 'terms',
                'created_at' => '2024-09-20 02:50:37',
                'updated_at' => '2024-09-20 02:50:37',
            ],
            [
                'id' => 12,
                'title' => 'counter',
                'short_description' => 'counter',
                'description' => '<p>counter</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'counter',
                'seo_title' => 'counter',
                'seo_schema' => 'counter',
                'meta_keywords' => 'counter',
                'meta_description' => 'counter',
                'created_at' => '2024-09-20 02:50:37',
                'updated_at' => '2024-09-20 02:50:37',
            ],
            [
                'id' => 13,
                'title' => 'blogpage',
                'short_description' => 'blogpage',
                'description' => '<p>blogpage</p>',
                'image_1' => 'admin/assets/img/logo.png',
                'image_2' => 'admin/assets/img/logo.png',

                'order' => 1,
                'status' => 1,
                'slug' => 'blogpages',
                'seo_title' => 'blogpage',
                'seo_schema' => 'blogpage',
                'meta_keywords' => 'blogpage',
                'meta_description' => 'blogpage',
                'created_at' => '2024-09-20 02:50:37',
                'updated_at' => '2024-09-20 02:50:37',
            ],


        ];

        if (count($pages)) {
            foreach ($pages as $page) {
                Pages::create($page);
            }
        }
    }
}
