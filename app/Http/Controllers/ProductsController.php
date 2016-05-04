<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests;

class ProductsController extends Controller
{
  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$products = Products::all();
		return $products;
	}

  public function details($id) {
    $products = Products::find($id);
    return $products;
  }

}
