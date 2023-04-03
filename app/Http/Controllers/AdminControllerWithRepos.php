<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\AnimalRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminControllerWithRepos extends Controller
{
    public function index()
    {
        $admin = AdminRepos::getAllAdmins();
        return view('Zoo.AdminWithRepos.index',
            [
                'admin' => $admin,
            ]);
    }

    public function show($id)
    {

        $admin = AdminRepos::getAdminById($id); //this is always an array of objects
        return view('Zoo.AdminWithRepos.show',
            [
                'admin' => $admin[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'Zoo.AdminWithRepos.new',
            ["admin" => (object)[
                'id' => '',
                'a_username' => '',
                'a_password_hash' => '',
                'a_fullname' => '',
                'a_phone' => '',
                'a_email' => '',
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'a_username' => $request->input('a_username'),
            'a_password_hash' => Hash::make($request->input('a_password_hash')),
            'a_fullname' => $request->input('a_fullname'),
            'a_phone' => $request->input('a_phone'),
            'a_email' => $request->input('a_email'),
        ];

        $newId = AdminRepos::insert($admin);

        return redirect()
            ->action('AdminControllerWithRepos@index')
            ->with('msg', 'New Admin with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $admin = AdminRepos::getAdminById($id); //this is always an array


        return view(
            'Zoo.AdminWithRepos.update',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $book = (object)[
            'id' => $request->input('id'),
            'a_username' => $request->input('a_username'),
            'a_password_hash' => $request->input('a_password_hash'),
            'a_fullname' => $request->input('a_fullname'),
            'a_phone' => $request->input('a_phone'),
            'a_email' => $request->input('a_email'),
        ];
        AdminRepos::update($book);

        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $admin = AdminRepos::getAdminById($id); //this is always an array

        return view('Zoo.AdminWithRepos.confirm',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminControllerWithRepos@index');
        }

        AdminRepos::delete($id);


        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'a_username' => ['required'],
                'a_password_hash' => ['required'],
                'a_fullname' => ['required'],
                'a_phone' => ['required'],
                'a_email' => ['required']
            ],
            [
                //change validation message
                'a_username.required' => 'Please input username of Admin',
                'a_password_hash.required' => 'Please input password of Admin',
                'a_fullname.required' => 'Please input fullname of Admin',
                'a_phone.required' => 'Please input phone number of Admin',
                'a_email.required' => 'Please input email contact of Admin',
            ]
        );
    }
}
