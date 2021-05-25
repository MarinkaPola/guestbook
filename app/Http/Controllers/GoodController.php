<?php

namespace App\Http\Controllers;

use App\Imports\GoodsImport;
use App\Exports\GoodsExport;
use App\Models\Good;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Requests\FilegoodRequest;


class GoodController extends Controller
{

    public function import(FilegoodRequest $request)
    {
        $count_id=Good::count();

         $path = request()->file('import_file')->getRealPath();

            Excel::import(new GoodsImport(), $path);

            $last_count_id=Good::count();
            $quantity=$last_count_id-$count_id;

        return $this->success($quantity);

    }

    public function export()
    {
        return Excel::download(new GoodsExport(), 'goods.xlsx');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Good  $good
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Good $good)
    {
       // return $this->success(GoodResource::make($good));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
