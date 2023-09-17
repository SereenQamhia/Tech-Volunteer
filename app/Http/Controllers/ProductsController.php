<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Volunteer;
use RealRashid\SweetAlert\Facades\Alert;
class ProductsController extends Controller
{

    public function ourproject()
    {
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();
        $volanters = DB::table('paypals')->get();
        
        return view('pages.products', compact('categories', 'products', 'users', 'volanters'));
    }
    public function product($id)
          {
                    $products = products::find($id);
                    $volanters = Volunteer::all();
                    return view('pages.single',compact('products' ,'volanters'));
          }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        
        return view('Admin_Dashboard.products', ['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::all();
        
        return view('Admin_Dashboard.Project_Create', ['products' => $products]);
    }
    
    public function view($id)
    {
        $productList= products::find($id);
        return view('Admin_Dashboard.products_view',['products'=>$productList]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breif' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'location' => 'required|string',
            'period' => 'required|string',
            'time' => 'required|string',
            'total' => 'required|numeric',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'breif.required' => 'The brief field is required.',
            'breif.string' => 'The brief field must be a string.',
            'description2.required' => 'The description2 field is required.',
            'description2.string' => 'The description2 field must be a string.',
            'description3.required' => 'The description3 field is required.',
            'description3.string' => 'The description3 field must be a string.',
            'location.required' => 'The location field is required.',
            'location.string' => 'The location field must be a string.',
            'period.required' => 'The period field is required.',
            'period.string' => 'The period field must be a string.',
            'time.required' => 'The time field is required.',
            'time.string' => 'The time field must be a string.',
            'total.required' => 'The total field is required.',
            'total.numeric' => 'The total field must be a number.',
            'image.image' => 'The image must be a valid JPEG, PNG, JPG, or GIF file.',
            'image.mimes' => 'The image must have a valid extension (jpeg, png, jpg, gif).',
            'image.max' => 'The image must be no larger than 2048 KB.',
        ]);
        $product=  new products;
        $product->name= $request->name;
        $product->breif= $request->breif;
        $product->description2= $request->description2;
        $product->description3= $request->description3;
        $product->location= $request->location;
        $product->period= $request->period;
        $product->time= $request->time;
        $product->total= $request->total;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $product->image =  $imageName;
        }
        $product->save();
        Alert::success('Added Successfuly', ' ');
        
        return redirect()->route('Admin_Dashboard.Projects');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        $productList= products::all();
        return view('Admin_Dashboard.Projects',['products'=>$productList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $product = products::find($id);
        return view('Admin_Dashboard.Projects_Update')->with('product', $product);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breif' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'location' => 'required|string',
            'period' => 'required|string',
            'time' => 'required|string',
            'total' => 'required|numeric',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'breif.required' => 'The brief field is required.',
            'breif.string' => 'The brief field must be a string.',
            'description2.required' => 'The description2 field is required.',
            'description2.string' => 'The description2 field must be a string.',
            'description3.required' => 'The description3 field is required.',
            'description3.string' => 'The description3 field must be a string.',
            'location.required' => 'The location field is required.',
            'location.string' => 'The location field must be a string.',
            'period.required' => 'The period field is required.',
            'period.string' => 'The period field must be a string.',
            'time.required' => 'The time field is required.',
            'time.string' => 'The time field must be a string.',
            'total.required' => 'The total field is required.',
            'total.numeric' => 'The total field must be a number.',
            'image.image' => 'The image must be a valid JPEG, PNG, JPG, or GIF file.',
            'image.mimes' => 'The image must have a valid extension (jpeg, png, jpg, gif).',
            'image.max' => 'The image must be no larger than 2048 KB.',
        ]);
        
        $product = products::find($id);

        $product->name= $request->name;
        $product->breif= $request->breif;
        $product->description2= $request->description2;
        $product->description3= $request->description3;
        $product->location= $request->location;
        $product->period= $request->period;
        $product->time= $request->time;
        $product->total= $request->total;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $product->image =  $imageName;
        }
        $product->save();
        
        Alert::success('Updated Successfuly', ' ');

        return redirect()->route('Admin_Dashboard.Projects')->with('success', 'student data dashboard successfully ');

          }

          /**
           * Remove the specified resource from storage.
           *
           * @param  \App\Models\products  $products
           * @return \Illuminate\Http\Response
           */
          public function destroy($id)
          {
         $products = Products::find($id);
          $products->delete();
         return redirect()->route('Admin_Dashboard.Projects')->with('success', 'student data dashboard successfully ');
          }
}
