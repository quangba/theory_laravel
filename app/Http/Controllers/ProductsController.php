<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct() {
        echo "khoi dong";
    }
    // phuong thuc GET
    public function index() {
        return "<h1>DANH SACH SAN PHAM</h1>";
    }
    // phuong thuc GET
    public function getProduct($id) {
        return "Get item" . $id;
        // return view('category/edit');
    }
    // phuong thuc POST
    public function updateProduct($id) {
        return "Update category ".$id;
    }
    // phuong thuc GET
    public function addProduct() {
        // return "Form them category";
        return view('products/form');
    }
    // phuong thuc POST
    public function handleAddProduct() {
        return "Them category thanh cong";
        // return redirect(route('category.add'));
    }
    // phuong thuc DELETE
    public function deleteProduct($id) {
        return "Xoa category ";
    }
}
