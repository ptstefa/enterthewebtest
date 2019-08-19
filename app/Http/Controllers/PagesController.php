<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function facilities()
  {
    return view('facilities', [
      'page_name' => 'Facilities'
    ]);

  }
    //
}
