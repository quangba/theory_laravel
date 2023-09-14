<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    // dung SQL
    protected $table = 'users';

    // public function getAllUser() {
    //     $user = DB::select('SELECT * from users');
    //     return $user;
    // }

    public function getAllUser() {
        $users = DB::select('SELECT * from users');
        return $users;
    }

    public function addUser($data) {
        // DB::insert('INSERT into users (name, email, create_add) values (?, ?, ?)', [1, 'Dayle'])
        DB::insert('INSERT into users (full_name, email, create_add) values (?, ?, ?)', $data);
    }

    public function getDetailUser($id) {
        return DB::select('SELECT * from '.$this->table.' where id = ?', [$id]);
    }

    public function updateUser($data, $id) {
        $data = array_merge($data, [$id]);
        // $data[] = $id;
        return DB::update('UPDATE '.$this->table.' set full_name=?, email=?, create_add=? where id = ?', $data);
    }

    public function deleteUser($id) {
        return DB::delete('DELETE FROM users where id=?', [$id]);
    }

    // Query Builder: là 1 class trong Laravel, cung cấp các phương thức để dễ dàng truy vấn với DB mà k cần sử dụng câu lệnh sql

    public function queryBuilder() {
        //  lấy tất cả dữ liệu trong bảng
        // $list = DB::table($this->table)->get();
        // dd($list);

        // Lấy 1 bảng ghi đầu tiên
        // $detail = DB::table($this->table)
        // ->select('email', 'full_name')
        // ->first();
        // dd($detail);

        // select 1 cột ở trong bảng
        // $list = DB::table($this->table)->select('email', 'full_name')->get();
        // dd($list);
        // Truy vấn theo điều kiện WHERE =, >, <, <>, DB::table('table')->where('column', 'dkien', filler)
        // $list = DB::table($this->table)
        // ->where('id', '<>', 3)
        // ->get();
        // dd($list);
        // and
        // $list = DB::table($this->table)
        // ->where('id', '>=' , 2)
        // ->where('id', '<=' , 2)
        // ->get();
        // dd($list);
        // or
        // $list = DB::table($this->table)
        // ->where('id', 1)
        // ->orWhere('id', 2)
        // ->get();
        // dd($list);

        // xem câu lệnh SQL
        // DB::enableQueryLog();
        // $list = DB::table($this->table)
        // ->where('id', 2)
        // ->where('id', 3)
        // ->get();
        // // dd($list);
        // dd(DB::getQueryLog());

        //  Tìm kiếm
        // DB::enableQueryLog();
        // $list = DB::table($this->table)
        // ->where('full_name', 'like', '%NGUYEN%')
        // ->get();
        // dd($list);
        // dd(DB::getQueryLog());

        // Truy vấn Khoảng DB::table($this->table)->whereBetween(column, [từ, đến])
        // $list = DB::table($this->table)->whereNotBetween('id', [1, 4])->get();

        // Truy vấn khác khoảng DB::table($this->table)->whereNotBetween(column, [từ, đến])
        // Truy vấn toán tử IN, NOT IN
        // $list = DB::table($this->table)->whereIn('id', [1, 3, 6])->get();
        // dd($list);
        // Kiểm tra NULL, NOT NULL whereNull(tên cột)
        // $list = DB::table($this->table)->whereNotNull('create_add')->get();
        // dd($list);
        // whereDate(tên cột, 'value'), whereMonth, whereDay, whereYear
        // $list = DB::table($this->table)->whereYear('create_add', '2023')->get();
        // dd($list);
        // truy vấn giá trị cột so sanh 2 gia trị trong cột whereColumn('column1', 'column2')
        // $list = DB::table($this->table)->whereColumn('create_add', '2023')->get();
        // dd($list);
        // sắp xếp hoặc sắp xếp nhiều. orderBy(tên cột, 'asc' || 'desc)->orderBy(tên cột, 'asc' || 'desc)
        // $list = DB::table($this->table)->orderBy('id', 'asc')->get();
        // dd($list);
        // Thêm 1 bảng ghi hoặc nhiều bảng ghi
        // DB::enableQueryLog();
        // $status = DB::table($this->table)
        // ->insert(['full_name' => 'nguyen van diem', 'email' => 'diem@gmail.com' ]);
        // // dd($status);
        // dd(DB::getQueryLog());
        // $lastId = DB::getPdo()->lastInsertId();
        // dd($lastId);
        // update
        // DB::enableQueryLog();
        // $status = DB::table($this->table)
        // ->where('id', 1)
        // ->update(['full_name' => 'nguyen van diem', 'email' => 'diem@gmail.com' ]);
        // dd($status);
        // dd(DB::getQueryLog());
        // delete
        // $status = DB::table($this->table)
        // ->where('id', 6)
        // ->delete();
        // dd(DB::getQueryLog());
        // dd($status);
    }


}
