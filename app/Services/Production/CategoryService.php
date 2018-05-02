<?php

namespace App\Services\Production;

use App\Models\Category;
use App\Services\Interfaces\CategoryServiceInterface;
use DB;
use Image;

class CategoryService extends BaseService implements CategoryServiceInterface
{
    /**
     * Create new user
     *
     * @param array $inputs
     * @return Post
     * @throws \Exception
     */
    public function createCategory(array $inputs)
    {
        $inputs['slug'] = str_slug($inputs['name'], '-');

        return Category::create($inputs);
    }

    /*

     * Delete User Data
     *
     * @param Post $post
     *
     * @return Bool
     */
    public function deleteCategory(Category $category)
    {
        return $category->delete();
    }

    /* Update User Data
    *
    * @param array $input
    * @param Post $post
    * @return Post
    */
    public function updateCategory(Category $category, array $inputs)
    {
        $inputs['slug'] = str_slug($inputs['name'], '-');

        return $category->update($inputs);
    }
}
