<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct() {
        /** Neu là danh sách chuyên mục thì sẽ hiển thị ra dòng chữ xin chao CGC3 */

    }
    // phuong thuc GET
    public function index(Request $request) {
        // PHP
        // if(isset($_GET['id'])) {
        //     echo $_GET['id'];
        // };

        // $request = $request->all();
        // $name = $request['id'];
        // dd($name);
        // dd($request->all());
        // echo $request->all()['id'];

        // request->path
        // $request = $request->path();
        //     dd($request);

        // request->is kiểm tra path
        // if ($request->is('thaovy')) {
        //     echo "path true";
        // } else {
        //     echo "mời ra khỏi room giùm cái!!!";
        // }

        // url or fullUrl
        // $request = $request->fullUrl();
        // dd($request);

        // method and isMethod kiểm tra method
        // $request = $request->isMethod('GET');
        // dd($request);


        // ip, server, header, input
        // $request = $request->ip();
        // dd($request);
        $request = $request->input();
        $name = $request;
        dd($name);

        // $input = $request->input();
        // dd($input);


        // return "list danh sach";
        // return view('category/index');
    }
    // phuong thuc GET
    public function getCategory($id) {
        return "Get item" . $id;
        // return view('category/edit');
    }
    // phuong thuc POST
    public function updateCategory($id) {
        return "Update category ".$id;
    }
    // phuong thuc GET
    public function addCategory() {
        return "Form them category";
        // return view('category/add');
    }
    // phuong thuc POST
    public function handleAddCategory() {
        return "Them category ";
        // return redirect(route('category.add'));
    }
    // phuong thuc DELETE
    public function deleteCategory($id) {
        return "Xoa category ";
    }

}
