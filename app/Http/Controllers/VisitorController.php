<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Http\Requests\StoreVisitor;

class VisitorController extends Controller
{
  use ResponseTrait;

  public function index()
  {
    $data = Visitor::all();

    return $this->returnData($data);
  }

  public function store(StoreVisitor $request)
  {
    $data= Visitor::create([
      'full_name' => $request->full_name,
      'email' => $request->email,
      'phone_number' => $request->phone_number,
      'bring_guest' => $request->bring_guest,
      'size' => $request->size,
    ]);

    return $this->returnData($data);
  }

  public function show(Visitor $visitor)
  {
    //
  }

  public function update(Request $request, Visitor $visitor)
  {
    //
  }

  public function destroy(Visitor $visitor)
  {
    //
  }
}
