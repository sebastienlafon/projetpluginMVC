/<?php

 
if( !class_exists( fooModel ) ):
    
    class fooModel
    {
       
        private $message;
 
      
        public function __construct()
        {
            $this->message = "HELLO WORLD";
        }
 
      
        public function set_message( $newMessage )
        {
            $this->message = $newMessage;
        }
 
        public function get_message()
        {
            return $this->message;
        }
    }
endif;
?>