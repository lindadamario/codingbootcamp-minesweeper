<?php 

class request {

    public static function get($name, $default = null) 
    {
        
        if(array_key_exists($name, $_REQUEST))
        {
            return $_REQUEST[$name]; // echo or whatever way we use it
        }
        else
        {
            return $default; // null or whatever the value should be if the key is not found
        } 
     
    
        return array_key_exists($name, $_REQUEST) ? $_REQUEST[$name] : $default;
        }
}




  

?>