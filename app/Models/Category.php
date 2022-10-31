<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public static function queryAllCategoriesActive()
    {
        return self::where(['category_status' => 1])->get();
    }
    public static function getCategoryByPath($path)
    {
        return self::where(['category_path' => $path])->first();
    }
    public static function paths()
    {
        return self::select('category_id', 'category_name', 'category_path', 'category_parent_id', 'category_status')->get();
    }
    public static function getProductHotByCategoryPathAndPage($request)
    {
        $path = $request->category;
        $orderBy = $request->order ?? 'desc';
        $orderTarget = $request->sort ?? 'category_id';
        $limit = $request->limit ?? 50;
        return self::where('category_path', $path)
            ->with([
                'products' => function ($query) {
                    $query->where(['hot' => 1, 'product_status' => 1]);
                },
            ])
            ->orderBy($orderTarget, $orderBy)
            ->cursorPaginate($limit);
    }

    public static function getProductsByCategoryID($request)
    {
        $category_id = $request->id;
        $orderBy = $request->order ?? 'desc';
        $orderTarget = $request->sort ?? 'updated_at';
        $limit = $request->limit ?? 50;
        return self::find($category_id)->where(['product_status' => 1])->with([
            'products' => function ($query) {
                $query
                    ->where(['product_status' => 1])
                    ->orderBy($orderTarget, $orderBy)
                    ->cursorPaginate($limit);
            },
        ]);
    }

    public static function getAllAndMergeChildrentCategories()
    {
        $listNav = self::where(['category_status' => 1])->get();
        $navs = getChildrenCat(0, $listNav);
        return $navs;
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}

function getChildrenCat($parentId, &$listNav)
{
    $children = [];
    foreach ($listNav as $key => $nav) {
        if ($nav['category_parent_id'] == $parentId) {
            $crrNav = $nav;
            $crrNav['children'] = getChildrenCat($nav['category_id'], $listNav);
            $children[] = $crrNav;
            unset($listNav[$key]);
        }
    }
    return $children;
}
