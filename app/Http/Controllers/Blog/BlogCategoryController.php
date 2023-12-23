<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogSubcategory;
use App\Models\Blog\BlogSubSubcategory;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return view('backend.blog.manage-categories');
    }
    public function create(Request $request)
    {
        if ($request->routeIs('blog.new-category')) {
            
            return view('backend.blog.category.new-category');

        } elseif ($request->routeIs('blog.new-subcategory')) {
        
            $categories = BlogCategory::select('category_name')->get();
            
            return view('backend.blog.category.new-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('blog.new-sub-subcategory')) {
        
            $subcategories = BlogSubcategory::select('subcategory_name')->get();
            
            return view('backend.blog.category.new-sub-subcategory', ['subcategories' => $subcategories]);
        }
        
        return view('backend.dashboard');
    }
    public function store(Request $request): RedirectResponse
    {

        if ($request->routeIs('blog.new-category.store')) {

            $category = BlogCategory::create([
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
                'is_index' => $request->is_index,
                'is_follow' => $request->is_follow,
                'is_featured' => $request->is_featured,
                'status' => $request->status,
                'comment' => $request->comment,
            ]);

            $category->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('blog/image/category/icon'), $icon);
                $category->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('blog/image/category/thumb'), $thumb);
                $category->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('blog/image/category/cover'), $cover);
                $category->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('blog/image/category/og'), $oGImage);
                $category->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $category->save();
            }

            Session::flash('message', __('New Blog Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::BlogCategories);

        } elseif ($request->routeIs('blog.new-subcategory.store')) {

            $subcategory = BlogSubcategory::create([
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
                'is_index' => $request->is_index,
                'is_follow' => $request->is_follow,
                'is_featured' => $request->is_featured,
                'status' => $request->status,
                'comment' => $request->comment,
            ]);

            $subcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('blog/image/category/subcategory/icon'), $icon);
                $subcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('blog/image/category/subcategory/thumb'), $thumb);
                $subcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('blog/image/category/subcategory/cover'), $cover);
                $subcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('blog/image/category/subcategory/og'), $oGImage);
                $subcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subcategory->save();
            }

            Session::flash('message', __('New Blog Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::BlogSubCategories);

        } elseif ($request->routeIs('blog.new-sub-subcategory.store')) {
            
            $subSubcategory = BlogSubSubCategory::create([
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
                'is_index' => $request->is_index,
                'is_follow' => $request->is_follow,
                'is_featured' => $request->is_featured,
                'status' => $request->status,
                'comment' => $request->comment,
            ]);

            $subSubcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('blog/image/category/subcategory/sub-subcategory/icon'), $icon);
                $subSubcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('blog/image/category/subcategory/sub-subcategory/thumb'), $thumb);
                $subSubcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('blog/image/category/subcategory/sub-subcategory/cover'), $cover);
                $subSubcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('blog/image/category/subcategory/sub-subcategory/og'), $oGImage);
                $subSubcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subSubcategory->save();
            }

            Session::flash('message', __('New Blog Sub Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::BlogSubSubCategories);

        }
        
        return view('backend.dashboard');
    }

    public function show(Request $request)
    {
        if ($request->routeIs('blog.categories')) {
            
            $categories = BlogCategory::all();
            
            return view('backend.blog.category.manage-category', ['categories' => $categories]);

        } elseif ($request->routeIs('blog.subcategories')) {
            
            $subcategories = BlogSubcategory::all();
            
            return view('backend.blog.category.manage-subcategory', ['subcategories' => $subcategories]);

        } elseif ($request->routeIs('blog.sub-subcategories')) {
        
            $sub_subcategories = BlogSubSubcategory::all();
            
            return view('backend.blog.category.manage-sub-subcategory', ['sub_subcategories' => $sub_subcategories]);
        }
        
        return view('backend.dashboard');
    }

    public function edit(Request $request, $id)
    {
        if ($request->routeIs('blog.category.edit')) {

            $category = BlogCategory::findOrFail($id);
            
            return view('backend.blog.category.edit-category', ['category' => $category]);

        } elseif ($request->routeIs('blog.subcategory.edit')) {

            $categories = BlogCategory::select('category_name')->get();

            $subcategory = BlogSubcategory::findOrFail($id);
            
            return view('backend.blog.category.edit-subcategory', ['categories' => $categories, 'subcategory' => $subcategory]);

        } elseif ($request->routeIs('blog.sub-subcategory.edit')) {

            $subcategories = BlogSubcategory::select('subcategory_name')->get();

            $sub_subcategory = BlogSubSubcategory::findOrFail($id);
            
            return view('backend.blog.category.edit-sub-subcategory', ['subcategories' => $subcategories, 'sub_subcategory' => $sub_subcategory]);
        }
        
        return view('backend.dashboard');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        if ($request->routeIs('blog.category.update')) {

            $category = BlogCategory::find($id);

            if ($category) {
                $newIcon = $request->file('icon');

                if ($newIcon) {

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('blog/image/category/icon'), $newIconName);

                    $category->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('blog/image/category/thumb'), $newThumbName);

                    $category->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('blog/image/category/cover'), $newCoverName);

                    $category->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('blog/image/category/og'), $newOGName);

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
                $category->is_index = $request->input('is_index');
                $category->is_follow = $request->input('is_follow');
                $category->is_featured = $request->input('is_featured');

                if (!is_null($request->input('status'))) {
                    $category->status = $request->input('status');
                }                        
                
                $category->comment = $request->input('comment');

                $category->save();

            } else {
                Session::flash('message', __('Blog Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Category Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('blog.subcategory.update')) {

            $subcategory = BlogSubcategory::find($id);

            if ($subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('blog/image/category/subcategory/icon'), $newIconName);

                    $subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('blog/image/category/subcategory/thumb'), $newThumbName);

                    $subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('blog/image/category/subcategory/cover'), $newCoverName);

                    $subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('blog/image/category/subcategory/og'), $newOGName);

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
                $subcategory->is_index = $request->input('is_index');
                $subcategory->is_follow = $request->input('is_follow');
                $subcategory->is_featured = $request->input('is_featured');

                if (!is_null($request->input('status'))) {
                    $subcategory->status = $request->input('status');
                }                        
                
                $subcategory->comment = $request->input('comment');

                $subcategory->save();

            } else {
                Session::flash('message', __('Blog Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Subcategory Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('blog.sub-subcategory.update')) {

            $sub_subcategory = BlogSubSubcategory::find($id);

            if ($sub_subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('blog/image/category/subcategory/sub-subcategory/icon'), $newIconName);

                    $sub_subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('blog/image/category/subcategory/sub-subcategory/thumb'), $newThumbName);

                    $sub_subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('blog/image/category/subcategory/sub-subcategory/cover'), $newCoverName);

                    $sub_subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('blog/image/category/subcategory/sub-subcategory/og'), $newOGName);

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
                $sub_subcategory->is_index = $request->input('is_index');
                $sub_subcategory->is_follow = $request->input('is_follow');
                $sub_subcategory->is_featured = $request->input('is_featured');

                if (!is_null($request->input('status'))) {
                    $sub_subcategory->status = $request->input('status');
                }                        
                
                $sub_subcategory->comment = $request->input('comment');

                $sub_subcategory->save();

            } else {
                Session::flash('message', __('Blog Sub Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Blog Sub Subcategory Successfully Updated!'));
            
            return back();
        }
        
        return view('backend.dashboard');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->routeIs('blog.category.destroy')) {

            BlogCategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Category Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('blog.subcategory.destroy')) {
            
            BlogSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Subcategory Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('blog.sub-subcategory.destroy')) {
            
            BlogSubSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Blog Sub Subcategory Successfully Deleted!'));
            
            return back();
        }
        
        return view('backend.dashboard');
    }
}
