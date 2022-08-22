<?php 
    namespace App\Helpers;

    use App\Models\Category;
    use Illuminate\Support\Facades\Redirect;

    class CheckcategoryHelpers{


        static function addCategory($field, $request){

            $selectCategories = Category::where($field, $request->name)->get();

            if(count($selectCategories) == 0){
				$category = new Category;
				$category->name = $request->name;
				$category->description = $request->description;
				return $category->save();
			}
			else{
				return false;
			}
        }
    }
?>