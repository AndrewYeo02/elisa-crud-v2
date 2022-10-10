<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TraineeFilter extends ApiFilter{
    protected $safeParms = [
        'name'=> ['eq'],
        'email'=> ['eq'],
        'dob'=> ['eq'],
    ];
    protected $columnMap =[
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt'=>'<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    
}
