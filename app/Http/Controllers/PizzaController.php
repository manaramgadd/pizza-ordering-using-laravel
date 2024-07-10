<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    $pizza = Pizza::all(); 

    return view('pizza.index', [
      'pizza' => $pizza,
    ]);
  
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    return view('pizza.show', ['id' => $id]);
  }
  public function create(){
    return view('pizza.create');
  }

}