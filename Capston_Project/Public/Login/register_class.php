<?php  include('../includes/DBconnection.php');

        class register extends dbconnection{
            public $customer_id;
            public $customer_name;
            public $customer_email;
            public $customer_password;
            public $customer_mobile;
            public $image;
           

        public function insertvendorData(){
            $q  =  "INSERT INTO customer(customer_name,customer_email,customer_password,customer_mobile,image)
                    VALUES
                    ('$this->customer_name','$this->customer_email','$this->customer_password',
                   ' $this->customer_mobile','$this->image')";

            $this->performQuery($q);        
        }
        public function VerifyLogin(){
          $query  = "SELECT * FROM customer WHERE customer_email = '$this->customer_email' 
          AND customer_password = 
           '$this->customer_password'";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
                  
     
        
  


        }




?>