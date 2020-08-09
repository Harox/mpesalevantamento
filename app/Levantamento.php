<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levantamento extends Model
{
    protected $fillable =[
        'type','number','value','reference','thirdReference','conversationId','transactionId','method','description','status'
    ];

    protected $table = 'levantamentos';
}
