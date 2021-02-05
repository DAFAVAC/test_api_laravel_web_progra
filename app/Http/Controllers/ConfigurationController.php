<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        //Method GET
        return $configuration = Configuration::all();
    }


    public function store(Request $request)
    {
        //Method POST
        $configuration = Configuration::create($request->all());

        return $configuration;
    }


    public function update(Request $request,$id)
    {
        //Method PATCH
        $configuration = Configuration::find($id);

        $configuration-> language =$request-> get("language");
        $configuration-> country =$request-> get("country");
        $configuration-> state =$request-> get("state");

        $configuration ->save();
        return $configuration;
    }

  
    public function destroy($id)
    {
               //Method DELETE
               $configuration = Configuration::find($id);
               $configuration->delete();
       
       
               return "delete succesfull";
    }
}
