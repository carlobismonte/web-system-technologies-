<?php
namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' =>'Carlo Bismonte',
                'email' => 'carlo@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' =>'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09161234567'
            ],
            [
                'full_name' =>'John Reyes',
                'email' => 'john@example.com',
                'phone' => '09121234567'
            ],
            [
                'full_name' =>'Anne Cruz',
                'email' => 'anne@example.com',
                'phone' => '09131234567'
            ],
            [
                'full_name' =>'Mark Garcia',
                'email' => 'Mark@example.com',
                'phone' => '09181234567'
            ]

        ];

        return view('customers/index', $data);
        
    }
}