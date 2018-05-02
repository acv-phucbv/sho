<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller as AdminController;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Models\Category;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;

class CategoriesController extends AdminController
{
    /**
     * @var CategoryServiceInterface
     */
    protected $categoryService;

    /**
     * Constructor
     */
    public function __construct(CategoryServiceInterface $categoryService)
    {
        parent::__construct();
        $this->middleware('admin');
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('deleted_at', null)->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($this->categoryService->createCategory($request->except('_token'))) {
            $request->session()->flash('flash_success', trans('common.create_success'));
            return redirect(route('admin.categories.index'));
        } else {
            $request->session()->flash('flash_error', trans('common.create_failed'));
        }

        return redirect(route('admin.categories.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($this->categoryService->updateCategory($category, $request->except('_token'))) {
            $request->session()->flash('flash_success', trans('common.update_success'));
            return redirect(route('admin.categories.index'));
        } else {
            $request->session()->flash('flash_error', trans('common.update_failed'));
            return redirect(route('admin.categories.edit', $category));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($this->categoryService->deleteCategory($category)) {
            session()->flash('flash_warning', trans('common.delete_success'));
        } else{
            session()->flash('flash_error', trans('common.delete_failed'));
        }

        return redirect(route("admin.categories.index"));
    }
}
