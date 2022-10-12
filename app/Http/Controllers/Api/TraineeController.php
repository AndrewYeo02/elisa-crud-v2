<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Arr;
use App\Filters\TraineeFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TraineeResource;
use App\Http\Resources\TraineeCollection;
use App\Models\Trainee;
use App\Http\Requests\StoreTraineeRequest;
use App\Http\Requests\UpdateTraineeRequest;

class TraineeController extends Controller
{
    


    public function index()
    {
        $trainees = Trainee::orderby('id', 'desc')->with('logbooks')->get();
        //  $trainees = $trainees->with('logbooks');
        // $trainees = TraineeResource::collection(with('logbooks')->get());
        return response()->json($trainees);
        // return new TraineeResource();
    }

     public function store(Request $request)
     {
 
         $trainee = Trainee::create($request->all());
 
         return response()->json([
             'status' => 'success',
             'trainee'   => $trainee
         ]);
     }
 
     public function show($id)
     {
         $trainee = Trainee::find($id);
 
         return response()->json($trainee);
     }
 
     public function update(Request $request, $id)
     {
         $trainee = Trainee::find($id);
         $trainee->update($request->all());
 
         return response()->json([
             'status' => 'success',
             'post'   => $trainee
         ]);
     }
 
     public function destroy($id)
      {
          $trainee = Trainee::find($id);
          $trainee->delete();
 
          return response()->json('Trainee successfully deleted!');
      }
}




// public function index(Request $request)
    // {
    //     $filter = new TraineeFilter();
        
    //     $filterItems = $filter->transform($request);//[['column','operator','value']]

    //     $includeLogbooks= $request->query('includeLogbooks');

    //     $trainees = Trainee::where($filterItems);

    //     if($includeLogbooks){
    //         $trainees = $trainees->with('logbooks');

    //     }

    //     return new TraineeCollection($trainees ->paginate()->appends($request->query()));
    
    // }
    // public function store(StoreTraineeRequest $request)
    // {
    //     //parse all the data from request to trainee table
    //     return new TraineeResource(Trainee::create($request->all()));
    // }

    // // public function store(Request $request)
    // // {

    // //     $trainee = Trainee::create($request->all());

    // //     return response()->json([
    // //         'status' => 'success',
    // //         'trainee'   => $trainee
    // //     ]);
    // // }



    // public function show(Trainee $trainee)
    // {
    //     // $trainee = Trainee::find($id);
    //     // return response()->json($trainee);

    //     $includeLogbooks = request()->query('includeLogbooks');
    //     if($includeLogbooks){
    //         return new TraineeResource($trainee->loadMissing('logbooks'));
    //     }
    //     return new TraineeResource($trainee);



    // }

   

    // public function update(UpdateTraineeRequest $request, Trainee $trainee)
    // {
    //     $trainee->update($request->all());
    // }

    // public function add(Request $request)
    // {
    //     $trainee = new Trainee([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email')
    //     ]);
    //     $trainee->save();
  
    //     return response()->json('post successfully added');
    // }
  

    // public function destroy($id)
    //  {
    //      $trainee = Trainee::find($id);
    //      $trainee->delete();

    //      return response()->json('Trainee successfully deleted!');
    //  }