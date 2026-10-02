<?php
namespace App\Controllers;
class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'Carlo Bismonte',
                'role' => 'Administrator'
            ],
            [
                'username' => 'maria.s',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'john.r',
                'full_name' => 'John Reyes',
                'role' => 'Sales Staff'
            ],
            [
                'username' => 'anne.c',
                'full_name' => 'Anne Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'mark.g',
                'full_name' => 'Mark Garcia',
                'role' => 'Manager'
            ]
        ];

        return view('users/index',$data);
    }
}