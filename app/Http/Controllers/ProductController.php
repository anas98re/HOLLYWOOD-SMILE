<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    private $MyServices;
    public function __construct(ProductService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function allProducts()
    {
        $products = $this->MyServices->allProducts();
        return $this->sendResponse($products, 'these are All Products');
    }

    public function addProduct(Request $request)
    {
        return $this->sendResponse($this->MyServices->addProduct($request), 'Added Done');
    }

    public function updateProduct(Request $request, $id)
    {
        return $this->sendResponse($this->MyServices->updateProduct($request, $id), 'updated Done');
    }

    public function deleteProduct($id)
    {
        return $this->sendResponse($this->MyServices->deleteProduct($id), 'deleted Done');
    }

    public function getAllOrders()
    {
        return $this->sendResponse($this->MyServices->getAllOrders(), 'these are all orders');
    }

    public function showOrder($id)
    {
        return $this->sendResponse($this->MyServices->showOrder($id), 'this is the order required');
    }

    public function deleteOrder($id)
    {
        return $this->sendResponse($this->MyServices->deleteOrder($id), 'Deleted Done');
    }

    public function addOrder(Request $request)
    {
        return $this->sendResponse($this->MyServices->addOrder($request), 'added Order Done');

    }

    public function SearchForProducts($request)
    {
        $product=$this->MyServices->SearchForProducts($request);
        return $this->sendResponse($product,'these are your works');
    }
}
