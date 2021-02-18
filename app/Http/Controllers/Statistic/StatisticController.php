<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Statistic;
use Validator;

class StatisticController extends Controller
{
    public function Statistic(Request $request){

       
     
      $click = isset($_POST['click']) ? $_POST['click'] : false ;

      
              $Statistic = new Statistic;
              $Statistic->place = $click;
              $Statistic->save();
            
    
            

    }
}
