<?php

namespace App\Models;


class Students {

    public static function all() {

      $students =
        [
        [
            'id' => 1,
            'name' => 'Zead Shalaby',
            'city' => 'Cairo',
            'phone' => '012457855',
            'gender' => 'male',
            'email' => 'Zead Shalaby@fox.com'
           
           ],
           [
            'id' => 2,
            'name' => 'Nermeen Fawzey',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'female',
            'email' => 'NermeenFawzey@fox.com'

           ],
           [
            'id' => 3,
            'name' => 'Marwan Yousef',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'female',
            'email' => 'MarwanYousef@fox.com'

           ],
           [
            'id' => 4,
            'name' => 'Manar Ahmed',
            'city' => 'Cairo',
            'phone' => '1245789 ',
            'gender' => 'female',
            'email' => 'ManarAhmed@fox.com'

           ],
           [
            'id' => 5,
            'name' => 'Waled Yousef',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'Male',
            'email' => 'WaledYousef@fox.com'

           ],
           [
            'id' => 6,
            'name' => 'Fawzey Ibrahem',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'Male',
            'email' => 'FawzeyIbrahem@fox.com'

           ],
           [
            'id' => 7,
            'name' => 'Fathey Wanes',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'Male',
            'email' => 'FatheyWanes@fox.com'

           ],
           [
            'id' => 8,
            'name' => 'Wael Waled',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'Male',
            'email' => 'WaelWaled@fox.com'

           ],
           [
            'id' => 9,
            'name' => 'Nour Yousef',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'Male',
            'email' => 'NourYousef@fox.com'

           ],
           [
            'id' => 10,
            'name' => 'Salma Shawkey',
            'city' => 'Mars',
            'phone' => '1245789 ',
            'gender' => 'female',
            'email' => 'SalmaShawkey@fox.com'

           ]
           ];

   return $students;

    }

public static function find($id){

    $students = self::all();

    foreach ($students as $student ){
        if($id == $student['id']){
            return $student;
        }
    }
}

}
