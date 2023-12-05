<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateBlogCategory;
use App\Models\Template\TemplateBlogSubcategory;
use App\Models\Template\TemplateBlogSubSubcategory;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateBlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('administration.template.blog.manage-blog-categories');
    }

    /**
     * Show the form for creating a new Blog resource.
     */
    public function create(Request $request)
    {
        if ($request->routeIs('template.blog.new-category')) {
            
            return view('administration.template.blog.new-blog-category');

        } elseif ($request->routeIs('template.blog.new-subcategory')) {
        
            $categories = TemplateBlogCategory::select('category_name')->get();
            
            return view('administration.template.blog.new-blog-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('template.blog.new-sub-subcategory')) {
        
            $subcategories = TemplateBlogSubcategory::select('subcategory_name')->get();
            
            return view('administration.template.blog.new-blog-sub-subcategory', ['subcategories' => $subcategories]);
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        if ($request->routeIs('template.blog.new-category.store')) {

            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            // dd($request);

            $category = TemplateBlogCategory::create([
                'category_name' => $request->category_name,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
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
            ]);

            $category->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/blog/category/icon'), $icon);
                $category->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/blog/category/thumb'), $thumb);
                $category->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/blog/category/cover'), $cover);
                $category->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/blog/category/og'), $oGImage);
                $category->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $category->save();
            }

            Session::flash('message', __('New Blog Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateBlogCategories);

        } elseif ($request->routeIs('template.blog.new-subcategory.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $subcategory = TemplateBlogSubcategory::create([
                'category_name' => $request->category_name,
                'subcategory_name' => $request->subcategory_name,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
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
            ]);

            $subcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/blog/category/subcategory/icon'), $icon);
                $subcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/blog/category/subcategory/thumb'), $thumb);
                $subcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/blog/category/subcategory/cover'), $cover);
                $subcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/blog/category/subcategory/og'), $oGImage);
                $subcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subcategory->save();
            }

            Session::flash('message', __('New Blog Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateBlogSubCategories);

        } elseif ($request->routeIs('template.blog.new-sub-subcategory.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $subSubcategory = TemplateBlogSubSubCategory::create([
                'sub_subcategory_name' => $request->sub_subcategory_name,
                'subcategory_name' => $request->subcategory_name,
                'slug' => $request->slug,
                'title' => $request->title,
                'description' => $request->description,
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
            ]);

            $subSubcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/blog/category/subcategory/sub-subcategory/icon'), $icon);
                $subSubcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/blog/category/subcategory/sub-subcategory/thumb'), $thumb);
                $subSubcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/blog/category/subcategory/sub-subcategory/cover'), $cover);
                $subSubcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/blog/category/subcategory/sub-subcategory/og'), $oGImage);
                $subSubcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subSubcategory->save();
            }

            Session::flash('message', __('New Blog Sub Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateBlogSubSubCategories);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->routeIs('template.blog.categories')) {
            
            $categories = TemplateBlogCategory::all();
            
            return view('administration.template.blog.manage-blog-categories', ['categories' => $categories]);

        } elseif ($request->routeIs('template.blog.subcategories')) {
            
            $subcategories = TemplateBlogSubcategory::all();
            
            return view('administration.template.blog.manage-blog-subcategories', ['subcategories' => $subcategories]);

        } elseif ($request->routeIs('template.blog.sub-subcategories')) {
        
            $sub_subcategories = TemplateBlogSubSubcategory::all();
            
            return view('administration.template.blog.manage-blog-sub-subcategories', ['sub_subcategories' => $sub_subcategories]);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if ($request->routeIs('template.blog.category.edit')) {

            $category = TemplateBlogCategory::findOrFail($id);
            
            return view('administration.template.blog.edit-blog-category', ['category' => $category]);

        } elseif ($request->routeIs('template.blog.subcategory.edit')) {

            $categories = TemplateBlogCategory::select('category_name')->get();

            $subcategory = TemplateBlogSubcategory::findOrFail($id);
            
            return view('administration.template.blog.edit-blog-subcategory', ['categories' => $categories, 'subcategory' => $subcategory]);

        } elseif ($request->routeIs('template.blog.sub-subcategory.edit')) {

            $subcategories = TemplateBlogSubcategory::select('subcategory_name')->get();

            $sub_subcategory = TemplateBlogSubSubcategory::findOrFail($id);
            
            return view('administration.template.blog.edit-blog-sub-subcategory', ['subcategories' => $subcategories, 'sub_subcategory' => $sub_subcategory]);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        if ($request->routeIs('template.blog.category.update')) {

            $category = TemplateBlogCategory::find($id);

            if ($category) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/blog/category/icon'), $newIconName);

                    $category->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/blog/category/thumb'), $newThumbName);

                    $category->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/blog/category/cover'), $newCoverName);

                    $category->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/blog/category/og'), $newOGName);

                    $category->og_image = $newOGName;
                }

                $category->category_name = $request->input('category_name');
                $category->slug = $request->input('slug');
                $category->title = $request->input('title');
                $category->description = $request->input('description');
                $category->meta_title = $request->input('meta_title');
                $category->meta_description = $request->input('meta_description');
                $category->facebook_meta_title = $request->input('facebook_meta_title');
                $category->facebook_meta_description = $request->input('facebook_meta_description');
                $category->twitter_meta_title = $request->input('twitter_meta_title');
                $category->twitter_meta_description = $request->input('twitter_meta_description');
                $category->icon_alt_text = $request->input('icon_alt_text');
                $category->thumb_alt_text = $request->input('thumb_alt_text');
                $category->cover_alt_text = $request->input('cover_alt_text');
                $category->og_img_alt_text = $request->input('og_img_alt_text');

                $category->save();

            } else {
                Session::flash('message', __('Blog Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Category Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('template.blog.subcategory.update')) {

            $subcategory = TemplateBlogSubcategory::find($id);

            if ($subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/blog/category/subcategory/icon'), $newIconName);

                    $subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/blog/category/subcategory/thumb'), $newThumbName);

                    $subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/blog/category/subcategory/cover'), $newCoverName);

                    $subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/blog/category/subcategory/og'), $newOGName);

                    $subcategory->og_image = $newOGName;
                }

                $subcategory->category_name = $request->input('category_name');
                $subcategory->subcategory_name = $request->input('subcategory_name');
                $subcategory->slug = $request->input('slug');
                $subcategory->title = $request->input('title');
                $subcategory->description = $request->input('description');
                $subcategory->meta_title = $request->input('meta_title');
                $subcategory->meta_description = $request->input('meta_description');
                $subcategory->facebook_meta_title = $request->input('facebook_meta_title');
                $subcategory->facebook_meta_description = $request->input('facebook_meta_description');
                $subcategory->twitter_meta_title = $request->input('twitter_meta_title');
                $subcategory->twitter_meta_description = $request->input('twitter_meta_description');
                $subcategory->icon_alt_text = $request->input('icon_alt_text');
                $subcategory->thumb_alt_text = $request->input('thumb_alt_text');
                $subcategory->cover_alt_text = $request->input('cover_alt_text');
                $subcategory->og_img_alt_text = $request->input('og_img_alt_text');

                $subcategory->save();

            } else {
                Session::flash('message', __('Blog Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Subcategory Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('template.blog.sub-subcategory.update')) {

            $sub_subcategory = TemplateBlogSubSubcategory::find($id);

            if ($sub_subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/blog/category/subcategory/sub-subcategory/icon'), $newIconName);

                    $sub_subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/blog/category/subcategory/sub-subcategory/thumb'), $newThumbName);

                    $sub_subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/blog/category/subcategory/sub-subcategory/cover'), $newCoverName);

                    $sub_subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/blog/category/subcategory/sub-subcategory/og'), $newOGName);

                    $sub_subcategory->og_image = $newOGName;
                }

                $sub_subcategory->sub_subcategory_name = $request->input('sub_subcategory_name');
                $sub_subcategory->subcategory_name = $request->input('subcategory_name');
                $sub_subcategory->slug = $request->input('slug');
                $sub_subcategory->title = $request->input('title');
                $sub_subcategory->description = $request->input('description');
                $sub_subcategory->meta_title = $request->input('meta_title');
                $sub_subcategory->meta_description = $request->input('meta_description');
                $sub_subcategory->facebook_meta_title = $request->input('facebook_meta_title');
                $sub_subcategory->facebook_meta_description = $request->input('facebook_meta_description');
                $sub_subcategory->twitter_meta_title = $request->input('twitter_meta_title');
                $sub_subcategory->twitter_meta_description = $request->input('twitter_meta_description');
                $sub_subcategory->icon_alt_text = $request->input('icon_alt_text');
                $sub_subcategory->thumb_alt_text = $request->input('thumb_alt_text');
                $sub_subcategory->cover_alt_text = $request->input('cover_alt_text');
                $sub_subcategory->og_img_alt_text = $request->input('og_img_alt_text');

                $sub_subcategory->save();

            } else {
                Session::flash('message', __('Blog Sub Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Sub Subcategory Successfully Updated!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        if ($request->routeIs('template.blog.category.destroy')) {

            TemplateBlogCategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Category Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('template.blog.subcategory.destroy')) {
            
            TemplateBlogSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Subcategory Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('template.blog.sub-subcategory.destroy')) {
            
            TemplateBlogSubSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Sub Subcategory Successfully Deleted!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }
}
