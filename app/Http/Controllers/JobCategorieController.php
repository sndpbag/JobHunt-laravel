<?php

namespace App\Http\Controllers;


use App\Models\job_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobCategorieController extends Controller
{
    public function jobCategrey_create(Request $request)

    {





        $validator = Validator::make(
            $request->all(),
            [
                'category' => 'required|string|max:33|unique:job_categories,category_name'
            ],
            ['category.required' => 'The category name field is required.',
                'category.string' => 'The category name must be a string.',
                'category.max' => 'The category name cannot exceed 30 characters.',
                'category.unique' => 'The category name has already been taken.'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $data = job_categorie::create([

            'category_name' => $request->category,

        ]);

        /*✅ Use create()
  
  → If you have protected $fillable in the model.

✅ Use save() → If you want more control before inserting.

✅ Use fill() + save() → If you are working with dynamic form inputs.

*/

        return response()->json(["message" => "Category Submited successfully", "data" => $data]);
    }



    public function fetch_category(Request $request) {

//  Create a query builder to dynamically apply conditions
        $query = job_categorie::query();

        //  Check if a search query exists and is not empty
        if($request->has('search') && !empty($request->search))
        {
              //  Apply search filter using SQL LIKE query on 'category_name' column
            $query->where('category_name', 'LIKE', '%'.$request->search.'%');
        }


//  Apply pagination with latest (4 items per page)
        $categories = $query->latest()->paginate(4);
        
       //  Return the data as JSON for AJAX requests
        return response()->json( ['status'=>true, 'data'=>$categories]);
    }
}
