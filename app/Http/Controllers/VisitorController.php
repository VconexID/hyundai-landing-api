<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Http\Requests\StoreVisitor;
use App\Mail\RegisterShipped;
use Illuminate\Support\Facades\Mail;

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

    Mail::to($request->email)->send(new RegisterShipped($data));

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
