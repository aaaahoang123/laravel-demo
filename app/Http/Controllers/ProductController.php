<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param ProductRequest $req
     * @return array
     * Tạo 1 product
     */
    public function create(ProductRequest $req)
    {
        return $req->validated();
    }

    /**
     * @return string
     * Trả về danh sách product
     */
    public function list()
    {
        return 'day la list';
    }

    /**
     * @param $id
     * @return mixed
     * Trả về 1 product, theo id đã gửi lên
     */
    public function single($id)
    {
        return $id;
    }

    /**
     * @param $id
     * Sửa 1 product, và trả về product đó
     */
    public function update($id, ProductRequest $req)
    {

    }

    /**
     * @param $id
     * Xóa product
     */
    public function delete($id)
    {

    }
}
