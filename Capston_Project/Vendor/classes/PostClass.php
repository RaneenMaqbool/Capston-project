<?php
	require('includes/DBconnection.php');

	class post extends dbconnection
	{
		public $post_id;
		public $post_title;
		public $post_desc;
		public $vendor_phone;
		public $images;
        public $vendor_name;
         
        
	
        public function ReadPOST(){
			$query  = "SELECT * FROM post";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}
        
        
        
   
        
        
        	public function Updatepost(){
			$query = "UPDATE post SET 
				post_title    = '$this->post_title'
                WHERE product_id = '$this->id'"; 
			$this->performQuery($query);
		}

		public function UpdatepostByID(){
			$query  = "SELECT * FROM post WHERE post_id = '$this->id'";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}
     
 
	}






?>