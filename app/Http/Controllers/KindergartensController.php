<?php

namespace App\Http\Controllers;

use App\Models\Kindergartens;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;

class KindergartensController extends Controller
{
    public function create()
    {
    }

    /**
     * @param Request $request
     * @return Paginator
     */
    public function index(Request $request)
    {
        $map = [];
        if (!is_null($request->input('name'))) $map[] = ['name', 'like', $request->input('name', '')];
        return Kindergartens::where($map)->simplePaginate(10);
    }

    public function store(Request $request)
    {
        $kindergartens = new Kindergartens;
        $kindergartens->name = $request->input('name');
        $kindergartens->save();
    }

    public function update($id, Request $request)
    {
        $kindergartens = Kindergartens::find($id);
        $kindergartens->name = $request->input('name', '');
        $kindergartens->save();
    }

    public function show($id, Request $request)
    {
        return Kindergartens::with([
            'grade' => function (Relation $relation) {
                //$relation->hide('id','name');
            }
        ])->findOrFail($id);
    }

    public function edit(Request $request)
    {

    }

    public function destroy($id)
    {
        Kindergartens::destroy($id);
    }

}
