<?php  include('../includes/DBconnection.php');

        class register extends dbconnection{
            public $vendor_id;
            public $vendor_name;
            public $manager_name;
            public $vendor_email;
            public $vendor_password;
            public $vendor_mobile;
            public $image;
            public $image2;
            public $category;
        public function insertvendorData(){
            $q  =  "INSERT INTO vendor(vendor_name,manager_name,vendor_email,vendor_password,vendor_mobile,image,
            image2,category)
                    VALUES
                    ('$this->vendor_name','$this->manager_name','$this->vendor_email',
                    '$this->vendor_password',
                     '$this->vendor_mobile','$this->image','$this->image2','$this->category')";

            $this->performQuery($q);        
        }
              public function insertvendorsData(){
                  $name=$_SESSION['vendor_name'];
                  $email=$_SESSION['vendor_email'];
                  $password=$_SESSION['vendor_password'];
                  $mobile= $_SESSION['vendor_mobile'];
                  $image=   $_SESSION['image']; 
            $q  =  "INSERT INTO vendors       VALUES('$name','$email','$password','$mobile','$image')";
            $this->performQuery($q);  
            return 	  $this->fetchAll($result);		

        }
        public function VerifyLogin(){
          $query  = "SELECT * FROM vendors WHERE vendor_email = '$this->vendor_email' 
          AND vendor_password = 
           '$this->vendor_password'";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
        
          public function readvendor(){
          $query  = "SELECT * FROM vendor" ;
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}          
          public function readvendors(){
          $query  = "SELECT * FROM vendors" ;
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}        
            public function readcategory(){
          $query  = "SELECT * FROM category" ;
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}          
       



        }




?>