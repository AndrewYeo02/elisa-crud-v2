<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class LogbooksFilter extends ApiFilter{

           

    protected $safeParms = [
        'trainee_id'=> ['eq'],
        'logname'=> ['eq','lt','gt','lte','gte'],
    ];
    protected $columnMap =[
        'traineeId' => 'trainee_id',
       
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt'=>'<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

    
}
