<?php
	require('includes/DBconnection.php');

	class product extends dbconnection
	{
		public $product_id;
		public $product_name;
		public $product_price;
		public $product_desc;
		public $images;
        public $category_id;
        public $qty;
        public $vendor_id;
        
		public function CreateProduct(){
			$query  = "INSERT INTO product(product_name,product_price,product_des,images,category_id,qty,vendor_id) 
			VALUES('$this->product_name','$this->product_price','$this->product_desc',
            '$this->images','$this->category_id','$this->qty','$this->vendor_id')";
			$this->performQuery($query);
		} 

		public function ReadCategory(){
			$query  = "SELECT * FROM category";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}
        public function ReadPOST(){
			$query  = "SELECT * FROM post";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}
        
        public function ReadAll(){
$query  = "SELECT * FROM product,category where product.category_id =category.category_id";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		  public function Read_Orders(){
          $query  = "SELECT * FROM orders,customer where orders.customer_id=customer.customer_id";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
        public function delete_product($id){
		$query = "DELETE FROM product where product_id=$id";
		$this->performQuery($query);
	}
             public function delete_cart($id){
		$query = "DELETE FROM carts where cart_id=$id";
		$this->performQuery($query);
	}
    public function delete_orders($id){
		$query = "DELETE FROM orders where order_id=$id";
		$this->performQuery($query);
	}
        
        
        	public function Updateproduct(){
			$query = "UPDATE product SET 
				product_name    = '$this->product_name',
				product_price   = '$this->product_price',
				product_des     = '$this->product_desc',
				images          = '$this->images',
				category_id     = '$this->category_id',
				qty             = '$this->qty'
                WHERE product_id = '$this->id'"; 
			$this->performQuery($query);
		}

		public function UpdateproductByID(){
			$query  = "SELECT * FROM product WHERE product_id = '$this->id'";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}
     
 
	}






?>