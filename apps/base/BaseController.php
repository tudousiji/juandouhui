<?php
namespace app\base;

use think\Controller;

class BaseController extends \think\Controller
{
    protected $keyConfig;
    
    public function __construct(){
        parent::__construct();
        if ($this->keyConfig == null) {
            $this->keyConfig = require ('apps/config/keyConfig.php');
            // var_dump($this->table);
        }
       
    }
    
    
    
}

?>