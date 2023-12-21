<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogSubcategory;
use App\Models\Blog\BlogSubSubcategory;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogPage;
use App\Models\Blog\BlogSetting;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogPageController extends Controller
{
    public function index($slug)
    {
        // $page = BlogPage::all();
        // $setting = BlogSetting::all();
        // $pageContent = BlogPage::where('slug', $slug)->firstOrFail();

        // return view('frontend.blog.skeleton.body', [
        //     'page' => $page,
        //     'setting' => $setting,
        //     'pageContent' => $pageContent
        // ]);

        Session::flash('message', __('Something Wrong!'));
    }
    
    public function homepage()
    {
        $page = BlogPage::where('slug', 'homepage')->firstOrFail();
        $setting = BlogSetting::first();
        $blogs = Blog::take(36)->get();

        return view('frontend.blog.homepage', [
            'page' => $page,
            'setting' => $setting,
            'blogs' => $blogs
        ]);
    }

    public function blogs()
    {
        $page = BlogPage::where('slug', 'more-blogs')->firstOrFail();
        $setting = BlogSetting::first();
        $blogs = Blog::all();

        return view('frontend.blog.more', [
            'page' => $page,
            'setting' => $setting,
            'blogs' => $blogs
        ]);
    }

    public function detail($slug)
    {
        $page = Blog::where('slug', $slug)->firstOrFail();
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $setting = BlogSetting::first();
        $relatedBlog = Blog::take(4)->get();

        return view('frontend.blog.detail', [
            'page' => $page,
            'blog' => $blog,
            'setting' => $setting,
            'relatedBlog' => $relatedBlog
        ]);
    }
    
    public function privacy()
    {
        $page = BlogPage::where('slug', 'privacy-policy')->firstOrFail();
        $setting = BlogSetting::first();
        
        return view('frontend.blog.privacy-policy', [
            'page' => $page,
            'setting' => $setting,
        ]);
    }
    
    public function terms()
    {
        $page = BlogPage::where('slug', 'terms-of-service')->firstOrFail();
        $setting = BlogSetting::first();
        
        return view('frontend.blog.terms-of-service', [
            'page' => $page,
            'setting' => $setting,
        ]);
    }
    
    public function license()
    {
        $page = BlogPage::where('slug', 'license')->firstOrFail();
        $setting = BlogSetting::first();
        
        return view('frontend.blog.license', [
            'page' => $page,
            'setting' => $setting,
        ]);
    }
    
    public function error404()
    {
        $page = BlogPage::where('slug', '404')->firstOrFail();
        $setting = BlogSetting::first();
        
        return view('frontend.blog.404', [
            'page' => $page,
            'setting' => $setting,
        ]);
    }

    public function create(Request $request)
    {
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        $sub_subcategories = BlogSubSubcategory::all();

        return view('backend.blog.page.new-page', [
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $keywords = implode(', ', $request->keywords);
        
        $page = BlogPage::create([
            'name' => $request->name,
            'title' => $request->title,
            'slug' => $request->slug,
            'keywords' => $keywords,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'facebook_meta_title' => $request->facebook_meta_title,
            'facebook_meta_description' => $request->facebook_meta_description,
            'twitter_meta_title' => $request->twitter_meta_title,
            'twitter_meta_description' => $request->twitter_meta_description,
            'thumb_alt_text' => $request->thumb_alt_text,
            'breadcrumb_alt_text' => $request->breadcrumb_alt_text,
            'cover_alt_text' => $request->cover_alt_text,
            'og_img_alt_text' => $request->og_img_alt_text,
            'is_index' => $request->is_index,
            'is_follow' => $request->is_follow,
            'is_featured' => $request->is_featured,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $page->save();

        if ($request->hasFile('thumb')) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->move(public_path('blog/page/image/thumb'), $thumb);
            $page->thumb = $thumb;
        }

        if ($request->hasFile('breadcrumb_image')) {
            $breadcrumbImage = $request->file('breadcrumb_image')->getClientOriginalName();
            $request->file('breadcrumb_image')->move(public_path('blog/page/image/breadcrumb'), $breadcrumbImage);
            $page->breadcrumb_image = $breadcrumbImage;
        }

        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path('blog/page/image/cover'), $coverImage);
            $page->cover_image = $coverImage;
        }

        if ($request->hasFile('og_image')) {
            $oGImage = $request->file('og_image')->getClientOriginalName();
            $request->file('og_image')->move(public_path('blog/page/image/og'), $oGImage);
            $page->og_image = $oGImage;
        }

        if ($request->hasFile('thumb') || $request->hasFile('breadcrumb_image') || $request->hasFile('cover_image') || $request->hasFile('og_image')) {
            $page->save();
        }

        Session::flash('message', __('New Page Successfully Created!'));
        
        return redirect(RouteServiceProvider::BlogPage);
    }

    public function show(Request $request)
    {            
        $pages = BlogPage::all();
        
        return view('backend.blog.page.manage-pages', ['pages' => $pages]);
    }

    public function edit($id)
    {
        $page = BlogPage::findOrFail($id);
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        $sub_subcategories = BlogSubSubcategory::all();
        
        return view('backend.blog.page.edit-page', [
            'page' => $page,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $page = Blogpage::find($id);

        if ($page) {
            $thumb = $request->file('thumb');

            if ($thumb) {

                $thumbName = $request->thumb->getClientOriginalName();
                $request->thumb->move(public_path('blog/page/image/thumb'), $thumbName);

                $page->thumb = $thumbName;
            }

            $breadcrumb = $request->file('breadcrumb_image');

            if ($breadcrumb) {

                $breadcrumbName = $request->breadcrumb_image->getClientOriginalName();
                $request->breadcrumb_image->move(public_path('blog/page/image/breadcrumb'), $breadcrumbName);

                $page->breadcrumb_image = $breadcrumbName;
            }

            $cover = $request->file('cover_image');

            if ($cover) {

                $coverName = $request->cover_image->getClientOriginalName();
                $request->cover_image->move(public_path('blog/page/image/cover'), $coverName);

                $page->cover_image = $coverName;
            }

            $og = $request->file('og_image');

            if ($og) {

                $ogImageName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('blog/page/image/og'), $ogImageName);

                $page->og_image = $ogImageName;
            }

            $keywords = implode(', ', (array) $request->keywords);

            $page->name = $request->input('name');
            $page->title = $request->input('title');
            $page->slug = $request->input('slug');            
            $page->keywords = $keywords;
            $page->category_name = $request->input('category_name');
            $page->subcategory_name = $request->input('subcategory_name');
            $page->sub_subcategory_name = $request->input('sub_subcategory_name');
            $page->short_description = $request->input('short_description');
            $page->long_description = $request->input('long_description');
            $page->youtube_iframe = $request->input('youtube_iframe');
            $page->header_content = $request->input('header_content');
            $page->meta_title = $request->input('meta_title');
            $page->meta_description = $request->input('meta_description');
            $page->facebook_meta_title = $request->input('facebook_meta_title');
            $page->facebook_meta_description = $request->input('facebook_meta_description');
            $page->twitter_meta_title = $request->input('twitter_meta_title');
            $page->twitter_meta_description = $request->input('twitter_meta_description');
            $page->thumb_alt_text = $request->input('thumb_alt_text');
            $page->breadcrumb_alt_text = $request->input('breadcrumb_alt_text');
            $page->cover_alt_text = $request->input('cover_alt_text');
            $page->og_img_alt_text = $request->input('og_img_alt_text');
            $page->is_index = $request->input('is_index');
            $page->is_follow = $request->input('is_follow');
            $page->is_featured = $request->input('is_featured');

            if (!is_null($request->input('status'))) {
                $page->status = $request->input('status');
            }                        
            
            $page->comment = $request->input('comment');

            $page->save();

        } else {
            
            Session::flash('update', __('There is a problem!'));

            return redirect()->back();
        }

        Session::flash('update', __('Page Successfully Updated!'));
        
        return redirect(RouteServiceProvider::BlogPage);
    }

    public function destroy(Request $request, $id)
    {
        BlogPage::where('id',$id)->delete();

        Session::flash('delete', __('Congratulations! The page deletion operation has been successfully executed.'));
        
        return back();
    }
}
