<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model {
    public function GetDataOperator($key = "", $stack = array())
    {
        foreach($stack as $arr => $val){
            if ($val['id'] == $key) {
                return $val;
            }
        }
        return array();
    }
    
    public function GetDataQueue($key = "", $stack = array())
    {
        foreach($stack as $arr => $val){
            if ($val['station_counter_operator_id'] == $key) {
                return $val;
            }
        }
        return array();
    }
}