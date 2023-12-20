<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\Blog;
use App\Models\Blog\Category;
use App\Models\Blog\Subcategory;
use App\Models\Blog\SubSubcategory;

use App\Models\Blog\BlogTag;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogTagController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    public function create(Request $request)
    {
        return view('backend.blog.tag.new-tag');
    }

    public function store(Request $request): RedirectResponse
    {
        $tag = BlogTag::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'facebook_meta_title' => $request->facebook_meta_title,
            'facebook_meta_description' => $request->facebook_meta_description,
            'twitter_meta_title' => $request->twitter_meta_title,
            'twitter_meta_description' => $request->twitter_meta_description,
            'icon_alt_text' => $request->icon_alt_text,
            'thumb_alt_text' => $request->thumb_alt_text,
            'cover_alt_text' => $request->cover_alt_text,
            'og_img_alt_text' => $request->og_img_alt_text,
            'is_index' => $request->is_index,
            'is_follow' => $request->is_follow,
            'is_featured' => $request->is_featured,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $tag->save();

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('blog/tag/icon'), $icon);
            $tag->icon = $icon;
        }

        if ($request->hasFile('thumb')) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->move(public_path('blog/tag/thumb'), $thumb);
            $tag->thumb = $thumb;
        }

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('blog/tag/cover'), $cover);
            $tag->cover = $cover;
        }

        if ($request->hasFile('og_image')) {
            $oGImage = $request->file('og_image')->getClientOriginalName();
            $request->file('og_image')->move(public_path('blog/tag/og'), $oGImage);
            $tag->og_image = $oGImage;
        }

        if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
            $tag->save();
        }

        Session::flash('message', __('New Blog Tag Successfully Added!'));
        
        return redirect(RouteServiceProvider::BlogTag);
    }

    public function show(Request $request)
    {
        $tags = BlogTag::all();
        
        return view('backend.blog.tag.manage-tag', ['tags' => $tags]);
    }

    public function edit($id)
    {
        $tag = BlogTag::findOrFail($id);
        
        return view('backend.blog.tag.edit-tag', [
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $tag = BlogTag::find($id);

        if ($tag) {
            $newIcon = $request->file('icon');

            if ($newIcon) {

                $newIconName = $request->icon->getClientOriginalName();
                $request->icon->move(public_path('blog/tag/icon'), $newIconName);

                $tag->icon = $newIconName;
            }

            $newThumb = $request->file('thumb');

            if ($newThumb) {

                $newThumbName = $request->thumb->getClientOriginalName();
                $request->thumb->move(public_path('blog/tag/thumb'), $newThumbName);

                $tag->thumb = $newThumbName;
            }

            $newCover = $request->file('cover');

            if ($newCover) {

                $newCoverName = $request->cover->getClientOriginalName();
                $request->cover->move(public_path('blog/tag/cover'), $newCoverName);

                $tag->cover = $newCoverName;
            }

            $newOG = $request->file('og_image');

            if ($newOG) {

                $newOGName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('blog/tag/og'), $newOGName);

                $tag->og_image = $newOGName;
            }

            $tag->name = $request->input('name');
            $tag->slug = $request->input('slug');            
            $tag->description = $request->input('description');
            $tag->description = $request->input('description');
            $tag->youtube_iframe = $request->input('youtube_iframe');
            $tag->header_content = $request->input('header_content');
            $tag->meta_title = $request->input('meta_title');
            $tag->meta_description = $request->input('meta_description');
            $tag->facebook_meta_title = $request->input('facebook_meta_title');
            $tag->facebook_meta_description = $request->input('facebook_meta_description');
            $tag->twitter_meta_title = $request->input('twitter_meta_title');
            $tag->twitter_meta_description = $request->input('twitter_meta_description');
            $tag->icon_alt_text = $request->input('icon_alt_text');
            $tag->thumb_alt_text = $request->input('thumb_alt_text');
            $tag->cover_alt_text = $request->input('cover_alt_text');
            $tag->og_img_alt_text = $request->input('og_img_alt_text');
            $tag->is_index = $request->input('is_index');
            $tag->is_follow = $request->input('is_follow');
            $tag->is_featured = $request->input('is_featured');

            if (!is_null($request->input('status'))) {
                $tag->status = $request->input('status');
            }                        
            
            $tag->comment = $request->input('comment');

            $tag->save();

        } else {
            
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Blog Tag Successfully Updated!'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        BlogTag::where('id',$id)->delete();

        Session::flash('delete', __('Blog Tag Successfully Deleted!'));
        
        return back();
    }
}
