<?php
/*
 * Push Bullet Dashboard
 */
class pushBulletDashboard { 
    
    public $owner, $secret = "", $acces_token = "";
    
    public function pushBulletDashboard() { 
      
        // onenable
        $this->owner = $this;
        $this->config();
      
    }
  
    public function config() { 
	
        $this->getData();
		
      
    } 
    private function getData(){ 
      
        //
        
    } 
} 

$pb = new pushBulletDashboard;

?>
