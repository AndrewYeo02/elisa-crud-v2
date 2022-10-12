<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LogbookResource;
use App\Http\Resources\LogbookCollection;
use App\Filters\LogbooksFilter;
use App\Models\Logbook;


class LogbookController extends Controller
{
    public function index()
    {
        $logbooks = Logbook::orderby('id', 'desc')->get();
       
        return response()->json($logbooks);
    }

    public function store(Request $request)
    {

        $logbook = Logbook::create($request->all());

        return response()->json([
            'status' => 'success',
            'logbook'   => $logbook
        ]);
    }

    public function show($id)
    {
        $logbook = Logbook::find($id);

        return response()->json($logbook);
    }

    public function update(Request $request, $id)
    {
        $logbook = Logbook::find($id);
        $logbook->update($request->all());

        return response()->json([
            'status' => 'success',
            'post'   => $logbook
        ]);
    }

    public function destroy($id)
     {
         $logbook = Logbook::find($id);
         $logbook->delete();

         return response()->json('Logbook successfully deleted!');
     }
}
