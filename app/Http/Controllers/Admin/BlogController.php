<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Model\blog_category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $categories = blog_category::all();
        $blogs = Blog::paginate(15);
        return view('admin.dashboard.blog.index',compact('blogs','categories'));
    }

    public function create()
    {
        $categories = DB::table('categories_for_blog')->get();
        return view('admin.dashboard.blog.create',compact('categories'));
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug' , $slug)->first();
        $categories = DB::table('categories_for_blog')->get();
        abort_if($blog == null,'404','Blog not found');

        return view('admin.dashboard.blog.edit',compact('blog','categories'));

    }

    public function status(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|string'
        ]);

        $blog = Blog::where('slug' , $slug)->first();

        if ($validator->fails() or $blog == null)
        {
            return response()->json([
                'message'   => 'Status was unable to change',
                'error' => 1
            ]);
        }
        switch ($request->status)
        {
            case Status::InProgress:
                $blog->status = Status::InProgress;
                break;
            case Status::InActive:
                $blog->status = Status::InActive;
                break;
            case Status::Active:
                $blog->status = Status::Active;
                break;
        }

        $blog->save();

        return response()->json([
            'message'   => 'Status changed',
            'error' => 0
        ]);
    }


    public function destroy($slug)
    {
        $blog = Blog::where('slug' , $slug)->first();
        abort_if($blog == null,'404','Blog not found');

        //Deleting Blog Categories
        $blog->categories()->detach();

        //Deleting Blog Images
        $images = $blog->images;
        if($images != null)
        {
            foreach ($images as $image)
            {
                $image->delete();
            }
        }

        //Deleting Blog Comments
        $comments = $blog->allComments;
        if($comments != null)
        {
            foreach ($comments as $comment)
            {
                $comment->delete();
            }
        }

        //Deleting Blog Thumbnail
        Storage::delete('public/'.$blog->user->username.'/blog/'.$blog->thumbnail);

        //Deleting Blog
        $blog->delete();

        return back()->with('popup_success','Blog deleted successfully');

    }

    public function setting()
    {
        return view('admin.dashboard.blog.setting.app');
    }
    public function indexCategory()
    {
        $categories = blog_category::all();
        return view('admin.dashboard.blog.setting.category.index',compact('categories'));
    }
    public function createCategory()
    {
        $categories = blog_category::all();
        return view('admin.dashboard.blog.setting.category.create',compact('categories'));
    }
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:tags|regex:/^[a-zA-Z ]*$/'
        ],[],['name' => 'Category Name']);


        $validator->validate();

        $category = blog_category::firstOrNew([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        if($category->exists)
        {
            return back()->with('popup_error', 'Category already exists');
        }
        $category->save();
        return back()->with('popup_success', 'Category Created');
    }
    public function editCategory($slug)
    {
        $category = blog_category::where('slug','=',$slug)->first();
        abort_if($category == null,'404','Category not found');


        return view('admin.dashboard.blog.setting.category.edit',compact('category'));
    }
    public function updateCategory(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|regex:/^[a-zA-Z ]*$/'
        ],[],['name' => 'Tag Name']);


        $validator->validate();

        $category = blog_category::where('slug','=',$slug)->first();
        abort_if($category == null,'404','Category not found');

        if ($category->name != $request->name)
        {
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->save();
        }
        else{
            $validator->getMessageBag()->add('name', 'Name is already taken');
            return back()->withErrors($validator)->withInput();
        }

        return redirect('admin/dashboard/blog/setting/category')->with('popup_success', 'Category Updated');
    }

    public function destroyCategory($slug)
    {
        $category = blog_category::where('slug','=',$slug)->first();
        abort_if($category == null,'404','Category not found');

        //Detach all tours
        $category->blogs()->detach();

        //Delete Tag

        $category->delete();

        return back()->with('popup_success','Category successfully deleted');
    }











    public function addCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'string|required|max:255|unique:categories_for_blog|regex:/^[a-zA-Z ]*$/',
            'category_id'=>'integer|nullable|exists:categories_for_blog,id',
        ]);

        $validator->validate();

        $category = new blog_category;

        $category = blog_category::create([
            'name' => $request->name,
            'parent_id' => $request->category_id,
        ]);

        return back()->with('popup_success','Category Created');
    }

}
