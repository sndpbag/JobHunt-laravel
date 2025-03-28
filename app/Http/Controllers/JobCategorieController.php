<?php

namespace App\Http\Controllers;

 
use App\Models\job_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobCategorieController extends Controller
{
    public function jobCategrey_create(Request $request)

    {

       


    
        $validator = Validator::make($request->all(),
        [
            'category' => 'required|string|max:33|unique:job_categories'
        ], [
            'category.required' => 'Category field টি অবশ্যই পূরণ করতে হবে।',
            'category.string' => 'Category অবশ্যই একটি স্ট্রিং হতে হবে।',
            'category.max' => 'Category সর্বোচ্চ ৩৩ অক্ষর পর্যন্ত হতে পারবে।',
            'category.unique' => 'এই category আগেই যুক্ত করা হয়েছে, অনুগ্রহ করে নতুন নাম দিন।'
        ]
        );

       if($validator->fails())
       {
        return response()->json(['errors'=>$validator->errors()],422);
       }
        

        $data = job_categorie::create([
             
             'category_name' => $request->category,
            
        ]);

  /*✅ Use create()
  
  → If you have protected $fillable in the model.

✅ Use save() → If you want more control before inserting.

✅ Use fill() + save() → If you are working with dynamic form inputs.

*/

        return response()->json(["message"=> "Category Submited successfully","data"=>$data]);
    }
}
