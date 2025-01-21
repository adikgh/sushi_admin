<? include "../../config/core.php";

	// 
	if (!$user_right) header('location: /');

	// product
	if (isset($_GET['id']) || $_GET['id'] != '') {
		$product_id = $_GET['id'];
		$product = db::query("select * from product where id = '$product_id'");
		if (mysqli_num_rows($product)) {
			$product_d = mysqli_fetch_assoc($product);

			// catalog
			$catalog_id = $product_d['catalog_id'];
			$catalog_d = product::pr_catalog($product_d['catalog_id']);
			
		} else header('location: /admin/products/');
	} else header('location: /admin/products/');


	// site setting
	$menu_name = 'products_item';
	$pod_menu_name = 'item';
	$site_set['header'] = true;
	$site_set['menu'] = true;
	$site_set['atops'] = true;
	$site_set['footer'] = false;
	$site_set['utop_bk'] = 'products';
	$site_set['utop_type'] = 'item';
	$site_set['utop_nm'] = $product_d['name_ru'];
	$css = ['products/main', 'products/item'];
	$js = ['products/main', 'products/item'];