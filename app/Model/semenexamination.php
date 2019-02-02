<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class semenexamination extends Model
{
    protected $fillable=[

      'patientId',
      'referredBy',
       'age',
       'investigationAdvised',
       'date', 
       'placeOfCollection',
       'timeOfCollectionInLab',
        'quantity',
             'consistency',
              'colour',
               'ph', 
               'liquficationTime', 
               'viscocity',
                'count',
                 'motility',
                  'abnormalForms',
                   'pusCells', 
                   'epithelialCells', 
                   'rbcs',
                    'fructoseTest',
                     
    ];
}
