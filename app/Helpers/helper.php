<?php
namespace App\Helpers;
class Helper{

    public static function getPivotAverage($results, $column, $decimals = 2)
    {
        $values = [];
        foreach($results as $result){
            if(isset($result->pivot->{$column})){
                $values[] = (float)$result->pivot->{$column};
            }
        }
        if(count($values) > 0){
            $average = array_sum($values)/count($values);
            return number_format($average, $decimals, ',', '.');
        }
        return null;
    }

}