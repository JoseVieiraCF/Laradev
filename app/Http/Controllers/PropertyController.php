<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertyController extends Controller
{



    public function index()
    {
        //$properties = DB::select('select * from properties');
        $properties = Property::all();
        return view('property.index')->with('properties',$properties);
    }

    public function show($name)
    {
        //$property = DB::select('select * from properties where url = ?',[$name]);
        $property = Property::where('url',$name)->get();
        if(!empty($property)){

            return view('property.show')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        $propertySlug = $this->setUrl($request->title);
//        $property = [
//            $propertySlug,
//            $request->title,
//            $request->description,
//            $request->rental_price,
//            $request->sale_price
//    ];
//
//        DB::insert('insert into properties (url,title,description,rental_price,sale_price) value (?,?,?,?,?)',$property);
        $property = [
            'url'=>$propertySlug,
            'title' => $request->title,
            'description' => $request->description,
            'rental_price' => $request->rental_price,
            'sale_price'=> $request->sale_price
        ];

        Property::create($property);
        return redirect()->action('PropertyController@index');
    }

    public function edit($name)
    {

        //$property = DB::select('select * from properties where url = ?',[$name]);
        $property = Property::where('url',$name)->get();
        if(!empty($property)){

            return view('property.edit')->with('property',$property);
        }else{
            return redirect()->action('PropertyController@index');
        }
    }

    public function update(Request $request,$id)
    {
        $propertySlug = $this->setUrl($request->title);
//        $property = [
//            $propertySlug,
//            $request->title,
//            $request->description,
//            $request->rental_price,
//            $request->sale_price,
//            $name
//
//        ];
//
//        DB::update('update properties set  url =?,title =?, description =?, rental_price = ?, sale_price = ? where url = ?',$property);
        $property = Property::find($id);
        $property->url = $propertySlug;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;
        $property->save();
        return redirect()->action('PropertyController@index');
    }

    public function destroy($name)
    {
        //$property = DB::select('select * from properties where url = ?',[$name]);
        $property = Property::where('url',$name)->get();
        if(!empty($property)){
            DB::select('delete from properties where url =?',[$name]);
            return redirect()->action('PropertyController@index');
        }else{
            return redirect()->action('PropertyController@index');
        }
    }



    private function setUrl($title){
        $propertySlug = str_slug($title);
        //$properties = DB::select('select * from properties');
        $properties = Property::all();
        $t =0;
        foreach ($properties as $property){
            if (str_slug($property->title)===$propertySlug){
                $t++;
            }
        }
        if($t>0){
            $propertySlug = $propertySlug.'-'.$t;
        }
        return $propertySlug;
    }

}
