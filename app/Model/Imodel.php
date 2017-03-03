<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class IModel extends Model {
    
    // public function scopeOfType($query, $type)
    // {
    //     return $query->where('name',$type);
    // }
    
    public function scopeListOption($query,$listOption)
    {
        $PageSize = array_key_exists('PageSize', $listOption)?(int)$listOption['PageSize']:20;
        $PageNumber = array_key_exists('PageNumber', $listOption)?(int)$listOption['PageNumber']:1;
        $Fields = array_key_exists('Fields', $listOption)?json_decode($listOption['Fields'],true) : null;
        $Filters =  array_key_exists('Filters', $listOption)?json_decode($listOption['Filters'],true) : array();
        
        $result = $query->where(function($q) use ($Filters) {
            foreach($Filters as $Filter){
               
                $q->Where($Filter['property'], $Filter['operand']??'=', $Filter['operand']=='like'?'%'.$Filter['value'].'%':$Filter['value']);
            }
        });
        // dd($result);
        return $result->Paginate($PageSize,$Fields,'PageNumber',$PageNumber)->appends($listOption);
        // $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
        
        // var_dump(json_decode($json));
        // var_dump(json_decode($json, true));
    }
    
}