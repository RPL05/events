<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use AutoNumberTrait;

    protected $table = 'activitys';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'code_activity' => [
                'format' => function () {
                    return 'RPL-EV/'. '/?';
                },
                'length' => 5
            ]
        ];
    }

}
