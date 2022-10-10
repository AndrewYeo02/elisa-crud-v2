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
    public function index(Request $request)
    {
        // $logbooks =  new LogbookCollection(Logbook::paginate());

        // return response()->json($logbooks);

         // invoice filter for the operator such as >=,<=,==,!=
         $filter = new LogbooksFilter();
         $queryItems = $filter->transform($request);//[['column','operator','value']]
         if(count($queryItems) == 0){
             return new LogbookCollection(Logbook::paginate());
         }else{
             $logbooks = Logbook::where($queryItems)->paginate();
 
             return new LogbookCollection($logbooks->appends($request->query()));
         }
    }

    public function store(Request $request)
    {

        // $logbook = Logbook::create($request->all());

        // return response()->json([
        //     'status' => 'success',
        //     'logbook'   => $logbook
        // ]);
    }

    public function show(Logbook $logbook)
    {
        return new LogbookResource($logbook);
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

         return response()->json('Trainee successfully deleted!');
     }
}
