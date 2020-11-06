<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExample;
use App\Http\Requests\UpdateExample;
use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('search')) {
            $data = Example::where('title', 'LIKE', '%' . $request->get('search') . '%')->orderBy('id', 'DESC')->get();
        } else {
            $data = Example::orderBy('id', 'DESC')->paginate(10);
        }

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExample $request)
    {
        $response = ImageController::uploadImage($request->image, '/example')->success->url;

        $data = Example::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $response
        ]);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    {
        return response()->json($example);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExample $request, Example $example)
    {
        if ($request->image) {
            $response = ImageController::uploadImage($request->image, '/example')->success->url;
        } else {
            $response = $example->image;
        }

        $updateData = Example::where('id', $example->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $response
        ]);

        $data = Example::find($example->id);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        $deleteData = Example::destroy($example->id);
        $data = ['message' => 'Success'];

        return response()->json($data);
    }
}
