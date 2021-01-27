<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAncestor;
use App\Http\Requests\UpdateAncestor;
use App\Models\Ancestor;
use Illuminate\Http\Request;

class AncestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('search')) {
            $data = Ancestor::with('descendants')
                ->where('title', 'ILIKE', '%' . $request->get('search') . '%')
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            $data = Ancestor::with('descendants')
                ->orderBy('id', 'DESC')
                ->paginate(10);
        }

        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $data = Ancestor::with('descendants')->get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAncestor $request)
    {
        $data = Ancestor::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ancestor  $ancestor
     * @return \Illuminate\Http\Response
     */
    public function show(Ancestor $ancestor)
    {
        $data = Ancestor::with('descendants')
            ->find($ancestor->id);

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ancestor  $ancestor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAncestor $request, Ancestor $ancestor)
    {
        $updateData = Ancestor::where('id', $ancestor->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $data = Ancestor::find($ancestor->id);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ancestor  $ancestor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ancestor $ancestor)
    {
        $deleteData = Ancestor::destroy($ancestor->id);
        $data = ['message' => 'Success'];

        return response()->json($data);
    }
}
