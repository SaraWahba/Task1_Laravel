<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/student',
            function(){
                
                $arr= [
                    
                    'students' => [
                            [ 
                                'id'=>1,
                                'name'=>'sara',
                                'section'=>'7',
                                'department'=>'CS',
                                'email'=>'sara@gmail.com'
                            ],

                            [ 
                                'id'=>2,
                                'name'=>'Ahmed',
                                'section'=>'2',
                                'department'=>'IT',
                                'email'=>'ahmed@gmail.com'
                            ],

                            [ 
                                'id'=>3,
                                'name'=>'Reham',
                                'section'=>'6',
                                'department'=>'IS',
                                'email'=>'reham@gmail.com'
                            ],

                            [ 
                                'id'=>4,
                                'name'=>'Mohammed',
                                'section'=>'9',
                                'department'=>'CS',
                                'email'=>'mohammed@gmail.com'
                            ],
                            [ 
                                'id'=>5,
                                'name'=>'Rana',
                                'section'=>'5',
                                'department'=>'IS',
                                'email'=>'rana@gmail.com'
                            ], 

                            [ 
                                'id'=>6,
                                'name'=>'Ali',
                                'section'=>'8',
                                'department'=>'CS',
                                'email'=>'ali@gmail.com'
                            ],

                            [ 
                                'id'=>7,
                                'name'=>'Eman',
                                'section'=>'3',
                                'department'=>'IT',
                                'email'=>'eman@gmail.com'
                                ],
                        


                    
                    ]
                ];
               return view('student',$arr);
            }

            // laravel port 80 
);