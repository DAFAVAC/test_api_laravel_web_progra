<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        //Method GET
        return $people = People::all();
    }

    
    public function store(Request $request)
    {
        //Method POST
        $people = People::create($request->all());

        return $people;
    }

    public function update(Request $request,$id)
    {
        //Method PATCH
        $people = People::find($id);

        $people-> nameUser =$request-> get("nameUser");
        $people-> nameFull =$request-> get("nameFull");
        $people-> email =$request-> get("email");
        $people-> cellphone =$request-> get("cellphone");
        $people-> age =$request-> get("age");
        $people-> dateBorn =$request-> get("dateBorn");

        $people ->save();
        return $people;
    }

    
    public function destroy( $id)
    {
        //Method DELETE
        $people = People::find($id);
        $people->delete();


        return "delete succesfull";
    }
}
