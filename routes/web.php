<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    $data = [
        'students' => [
            [
                'name' => 'Aldo',
                'lastname' => 'Baglio',
                'skills' => [
                    'html', 'css', 'js'
                ]
            ],
            [
                'name' => 'Giacomo',
                'lastname' => 'Poretti',
                'skills' => [
                    'html', 'css', 'js', 'php'
                ]
            ],
            [
                'name' => 'Giovanni',
                'lastname' => 'Storti',
                'skills' => []
            ],
            [
                'name' => 'Marina',
                'lastname' => 'Massironi',
                'skills' => [
                    'html', 'css', 'js', 'php'
                ]
            ],
        ]

    ];
    return view('home', $data);
});
