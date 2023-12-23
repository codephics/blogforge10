<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogTag;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogSubcategory;
use App\Models\Blog\BlogSubSubcategory;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogController extends Controller
{
    public function index()
    {
        return back();
    }

    public function create(Request $request)
    {
        $tags = BlogTag::all();
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        $sub_subcategories = BlogSubSubcategory::all();

        return view('backend.blog.new-blog', [
            'tags' => $tags, 
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $tags = implode(', ', $request->tags);

        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'tags' => $tags,
            'author' => $request->author,
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
            'is_index' => $request->is_index,
            'is_follow' => $request->is_follow,
            'is_featured' => $request->is_featured,
            'featured_img_alt_text' => $request->featured_img_alt_text,
            'og_img_alt_text' => $request->og_img_alt_text,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $blog->save();

        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->move(public_path('blog/image/featured'), $featuredImage);
            $blog->featured_image = $featuredImage;
        }

        if ($request->hasFile('og_image')) {
            $oGImage = $request->file('og_image')->getClientOriginalName();
            $request->file('og_image')->move(public_path('blog/image/og'), $oGImage);
            $blog->og_image = $oGImage;
        }

        if ($request->hasFile('featured_image') || $request->hasFile('og_image')) {
            $blog->save();
        }

        Session::flash('message', __('New Blog Successfully Added!'));
        
        return redirect(RouteServiceProvider::Blog);
    }

    public function show(Request $request)
    {
        $blogs = Blog::all();
        
        return view('backend.blog.manage-blog', ['blogs' => $blogs]);
    }

    public function edit($id)
    {
        $tags = BlogTag::all();
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        $sub_subcategories = BlogSubSubcategory::all();

        $selectedTags = array_map('trim', explode(',', $blog->tags));
        
        return view('backend.blog.edit-blog', [
            'tags' => $tags,
            'selectedTags' => $selectedTags,
            'blog' => $blog,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $blog = Blog::find($id);

        if ($blog) {
            $featuredImage = $request->file('featured_image');

            if ($featuredImage) {

                $featuredImageName = $request->featured_image->getClientOriginalName();
                $request->featured_image->move(public_path('blog/image/featured'), $featuredImageName);

                $blog->featured_image = $featuredImageName;
            }

            $og = $request->file('og_image');

            if ($og) {

                $ogImageName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('blog/image/og'), $ogImageName);

                $blog->og_image = $ogImageName;
            }

            $tags = implode(', ', (array) $request->tags);

            $blog->title = $request->input('title');
            $blog->slug = $request->input('slug');            
            $blog->tags = $tags;
            $blog->author = $request->input('author');
            $blog->category_name = $request->input('category_name');
            $blog->subcategory_name = $request->input('subcategory_name');
            $blog->sub_subcategory_name = $request->input('sub_subcategory_name');
            $blog->short_description = $request->input('short_description');
            $blog->long_description = $request->input('long_description');
            $blog->youtube_iframe = $request->input('youtube_iframe');
            $blog->header_content = $request->input('header_content');
            $blog->meta_title = $request->input('meta_title');
            $blog->meta_description = $request->input('meta_description');
            $blog->facebook_meta_title = $request->input('facebook_meta_title');
            $blog->facebook_meta_description = $request->input('facebook_meta_description');
            $blog->twitter_meta_title = $request->input('twitter_meta_title');
            $blog->twitter_meta_description = $request->input('twitter_meta_description');
            $blog->is_index = $request->input('is_index');
            $blog->is_follow = $request->input('is_follow');
            $blog->is_featured = $request->input('is_featured');
            $blog->featured_img_alt_text = $request->input('featured_img_alt_text');
            $blog->og_img_alt_text = $request->input('og_img_alt_text');

            if (!is_null($request->input('status'))) {
                $blog->status = $request->input('status');
            }                        
            
            $blog->comment = $request->input('comment');
            
            $blog->save();

        } else {
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Blog Successfully Updated!'));
        
        return redirect(RouteServiceProvider::Blog);
    }

    public function destroy(Request $request, $id)
    {
        Blog::where('id',$id)->delete();

        Session::flash('delete', __('Blog Successfully Deleted!'));
        
        return redirect(RouteServiceProvider::Blog);
    }
}
