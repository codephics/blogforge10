<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\SitemapGenerator;

class BlogSitemapController extends Controller
{
    public function index()
    {

        // Define the path where you want to save the sitemap file
        $path = public_path('sitemap.xml');

        // Generate the sitemap for your website
        SitemapGenerator::create('http://localhost/blogforge10/')
            ->writeToFile($path);

        return response()->file($path);

        // Optionally, you can specify additional options, such as the maximum number of links per sitemap file:
        // SitemapGenerator::create('http://localhost/system-app/public/template-store/')
        //     ->setMaxTags(50000) // Set the maximum number of links per sitemap file
        //     ->writeToFile($path);

        // You can also set additional options using chaining methods as needed.

    }
}