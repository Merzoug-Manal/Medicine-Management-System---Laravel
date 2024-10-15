<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Medicine;
use App\models\categories;

class PostController extends Controller
{
  public function index(Request $request)
  {
      
      $search = $request->input('search');
  
      
      if ($search) {
          $medicineFromdb = Medicine::where('title', 'like', "%{$search}%")->get();
      } else {
          
          $medicineFromdb = Medicine::all();
      }
  
      
      return view('medicines.index', ['medicines' => $medicineFromdb]);
  }
  

  public function show(Medicine $medicine)
  {
     // select * from Medicines where id=medicineId  medicine::find($medicineId);
    //  $singleMedicineFromdb=medicine::where('id',$medicineId)->first();
    

    return view('medicines.show', ['infoMedicine' => $medicine]);
  }



  public function create(categories $categories)
  {

     $categories=categories::all();


    return view('medicines.create',['categories'=>$categories]);
  }

  public function store()
  {
    //validate data
    
    request()->validate([
      'title'=>['required','min:5'],
      'price'=>['required'],
      'description'=>['required','min:10'],
    ]);

    $data = request()->all();
     //get the medicine information
    $title=request()->title;
    $category=request()->category;
    $price=request()->price;
    $description=request()->description;

   //Store the sumbit data in database
    $Medicine= new Medicine;

     $Medicine->title= $title; 
     $Medicine->category= $category;
     $Medicine->price= $price;
     $Medicine->description= $description;

     $Medicine->save();


    return to_route('medicines.index'); //redirection to index page
  }

  public function edit(Medicine $medicine)
  {
    //select * from categories
    $categories=categories::all();

   

    return view('medicines.update',['categories'=>$categories,'medicine'=>$medicine]);
  }

  public function update($medicineId){

     //get the medicine information
     $title=request()->title;
     $category=request()->category;
     $price=request()->price;
     $description=request()->description;


     //find the Medicine
     $singleMedicineFromdb=Medicine::find($medicineId);


     //update the information
     $singleMedicineFromdb->update([
      'title' => $title,
      'category' => $category,
      'price' => $price,
      'description' => $description
     ]);

    return to_route('medicines.show',$medicineId); 
  

  }

  public function destroy($medicineId){
  
    $medicine=Medicine::find($medicineId);

    $medicine->delete(); // Medicine::where('id',$medicine->id)->delete();
   
    return to_route('medicines.index'); //
  
    
  }
}
