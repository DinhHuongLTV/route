<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct() {
    }

    // ds chuyên mục (get method)
    public function index() {
        return 'Danh sách chuyên mục';
    }

    // chuyên mục theo id (get method)
    public function getCategory($id) {
        return 'Chi tiết chuyên mục id: ' . $id;
    }

    // show form tạo chuyên mục mới (get method)
    public function create() {
        return view('clients\categories\add');
    }

    // handle tạo chuyên mục mới (post method)
    public function handleCreate() {
        // return 'Submit tạo mới thư mục';
        return redirect('category\add');
    }

    // post method
    public function update($id) {
        return 'submit update';
    }

    // delete method
    public function delete($id) {

    }
}
