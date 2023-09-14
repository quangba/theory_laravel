<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    public function index() {
        $title = "laravel";
        // $users = DB::select('SELECT * from users');
        // $user = DB::select('SELECT * from users WHERE id > ?', [1]);
        // $user = DB::select('SELECT * from users WHERE email=:email', [
        //     'email' => 'batq@gmail.com'
        // ]);
        $users = new Users();
        // $usersList = $users->getAllUser();
        // Goij model
        // $users = new Users();

        //  Quey Builder
        $usersList = $users->queryBuilder();

        return view('user.index', compact('title', 'usersList'));
    }

    public function add() {
        $title = "them nguoi dung";
        return view('user.add', compact('title'));
    }

    public function postAdd(Request $request) {
        // $request->validate([
        //     'fullname' => 'required|min:5',
        //     'email' => 'required|email|unique:users',
        // ],[
        //     'fullname.required' => 'ho va ten bat buoc phai nhap',
        //     'fullname.min' => 'ho va ten phai tu 5 ky tu tro len',
        //     'email.required' => 'email bat buoc phai nhap',
        //     'email.email' => 'email phai dung dinh dang',
        //     'email.unique' => 'trung email',
        // ]);
        $dataInsert = [
            $request->fullname,
            $request->email,
            date('Y-m-d'),
        ];
        $users = new Users();
        $users->addUser($dataInsert);
        return redirect()->route('user.index')->with("msg", "Them nguoi dung thanh cong");
    }

    public function getEdit($id=0) {
        $title = "sua nguoi dung";
        if(!empty($id)) {
            $users = new Users();
            $usersDetail = $users->getDetailUser($id);
            if (!empty($usersDetail[0])) {
                $usersDetail = $usersDetail[0];
            } else {
                return redirect()->route('user.index')->with("msg", "nguoi dung khong ton tai");
            }
        } else {
            return redirect()->route('user.index')->with("msg", "nguoi dung khong ton tai");
        }
        return view('user.edit', compact('title', 'usersDetail'));
    }

    public function postEdit(Request $request, $id=0) {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email',
        ],[
            'fullname.required' => 'ho va ten bat buoc phai nhap',
            'fullname.min' => 'ho va ten phai tu 5 ky tu tro len',
            'email.required' => 'email bat buoc phai nhap',
            'email.email' => 'email phai dung dinh dang',
        ]);
        $dataUpdate = [
            $request->fullname,
            $request->email,
            date('Y-m-d'),
        ];
        $users = new Users();
        $users->updateUser($dataUpdate, $id);
        return redirect()->route('user.edit', ['id' => $id])->with("msg", "Cap nhat nguoi dung thanh cong");
    }

    public function delete($id=0) {
        $users = new Users();
        if(!empty($id)) {
            $usersDetail = $users->getDetailUser($id);
            if (!empty($usersDetail[0])) {
                $deleteStatus = $users->deleteUser($id);
                if ($deleteStatus) {
                    $msg = "xoa nguoi dung thanh cong";
                } else {
                    $msg = "khong the xoa nguoi dung";
                }
            } else {
                $msg = 'nguoi dung k ton tai';
            }
        } else {
            $msg = 'lien ket khong ton tai';
        }
        return redirect()->route('user.index')->with("msg", $msg);
    }
}
