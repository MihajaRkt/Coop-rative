<?php 

namespace app\models;

use Flight;

class ProdModel {

	public function getProducts() {
		$products = [
			[ 'id' => 1, 'name' => 'Cahier', 'prix' => '10$', 'img' => '1.jpg' ],
			[ 'id' => 2, 'name' => 'Stylo', 'prix' => '5$', 'img' => '2.jpg' ],
			[ 'id' => 3, 'name' => 'Crayon', 'prix' => '2$', 'img' => '3.jpg' ],
		];

        return $products;
    }

    public function getProduct($id) {
		// You could actually pull data from the database if you had one set up
		// $user = $this->app->db()->fetchRow("SELECT * FROM users WHERE id = ?", [ $id ]);

		$prodModel= new ProdModel();
		$products= $prodModel->getProducts();

		$prod_filtered = array_filter($products, function($data) use ($id) {
			return $data['id'] === (int) $id;
		});
		if($prod_filtered) {
			$prod = array_pop($prod_filtered);
		    return $prod;
		}
		
	}

}

?>