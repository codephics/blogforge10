<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\Template;
use App\Models\Template\TemplatePage;
use App\Models\Template\TemplateBlog;
use App\Models\Template\TemplateTemplate;
use App\Models\Template\TemplateCategory;
use App\Models\Template\TemplateSubcategory;
use App\Models\Template\TemplateSubSubcategory;

use App\Models\Template\TemplateSeller;
use App\Models\Template\TemplateBlogTag;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateBlogTagController extends Controller
{
    public function index()
    {
        return view('frontend.template.blog');
    }

    public function create(Request $request)
    {
        return view('administration.template.blog.new-blog-tag');
    }

    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'slug' => ['required', 'regex:/^[a-z]+$/'],
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ], [
        //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
        // ]);

        $tag = TemplateBlogTag::create([
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
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $tag->save();

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('template/blog/tag/icon'), $icon);
            $tag->icon = $icon;
        }

        if ($request->hasFile('thumb')) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->move(public_path('template/blog/tag/thumb'), $thumb);
            $tag->thumb = $thumb;
        }

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('template/blog/tag/cover'), $cover);
            $tag->cover = $cover;
        }

        if ($request->hasFile('og_image')) {
            $oGImage = $request->file('og_image')->getClientOriginalName();
            $request->file('og_image')->move(public_path('template/blog/tag/og'), $oGImage);
            $tag->og_image = $oGImage;
        }

        // dd($tag);

        if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
            $tag->save();
        }

        Session::flash('message', __('New Blog Tag Successfully Added!'));
        
        return redirect(RouteServiceProvider::TemplateBlogTag);
    }

    public function show(Request $request)
    {
        $tags = TemplateBlogTag::all();
        
        return view('administration.template.blog.manage-blog-tags', ['tags' => $tags]);
    }

    public function edit($id)
    {
        $tag = TemplateBlogTag::findOrFail($id);
        
        return view('administration.template.blog.edit-blog-tag', [
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $tag = TemplateBlogTag::find($id);

        if ($tag) {
            $newIcon = $request->file('icon');

            if ($newIcon) {
                $validatedData = $request->validate([
                    // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newIconName = $request->icon->getClientOriginalName();
                $request->icon->move(public_path('template/blog/tag/icon'), $newIconName);

                $tag->icon = $newIconName;
            }

            $newThumb = $request->file('thumb');

            if ($newThumb) {
                $validatedData = $request->validate([
                    // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newThumbName = $request->thumb->getClientOriginalName();
                $request->thumb->move(public_path('template/blog/tag/thumb'), $newThumbName);

                $tag->thumb = $newThumbName;
            }

            $newCover = $request->file('cover');

            if ($newCover) {
                $validatedData = $request->validate([
                    // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newCoverName = $request->cover->getClientOriginalName();
                $request->cover->move(public_path('template/blog/tag/cover'), $newCoverName);

                $tag->cover = $newCoverName;
            }

            $newOG = $request->file('og_image');

            if ($newOG) {
                $validatedData = $request->validate([
                    // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newOGName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('template/blog/tag/og'), $newOGName);

                $tag->og_image = $newOGName;
            }

            // Update other fields of the request
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

            if (!is_null($request->input('status'))) {
                $tag->status = $request->input('status');
            }
            
            $tag->comment = $request->input('comment');

            // Save the changes
            $tag->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Blog Tag Successfully Updated!'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        TemplateBlogTag::where('id',$id)->delete();

        Session::flash('delete', __('Blog Tag Successfully Deleted!'));
        
        return back();
    }
}
