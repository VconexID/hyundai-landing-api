<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDescendant;
use App\Http\Requests\UpdateDescendant;
use App\Models\Descendant;
use Illuminate\Http\Request;

class DescendantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('search')) {
            $data = Descendant::with('ancestor')
                ->where('title', 'ILIKE', '%' . $request->get('search') . '%')
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            $data = Descendant::orderBy('id', 'DESC')
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
        $data = Descendant::with('ancestor')
            ->get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDescendant $request)
    {
        $data = Descendant::create([
            'content' => $request->content,
            'ancestor_id' => $request->ancestor_id,
        ]);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descendant  $descendant
     * @return \Illuminate\Http\Response
     */
    public function show(Descendant $descendant)
    {
        $data = Descendant::with('ancestor')
            ->find($descendant->id);

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descendant  $descendant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDescendant $request, Descendant $descendant)
    {
        $updateData = Descendant::where('id', $descendant->id)->update([
            'content' => $request->content,
            'ancestor_id' => $request->ancestor_id,
        ]);

        $data = Descendant::find($descendant->id);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descendant  $descendant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descendant $descendant)
    {
        $deleteData = Descendant::destroy($descendant->id);
        $data = ['message' => 'Success'];

        return response()->json($data);
    }
}
