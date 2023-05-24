<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public static $flights = [
        "departure" => [
            [
                "id" => 29,
                "city" => "Parigi",
                "time" => "15:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 350,
                    "occupied" => 350,
                ],
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 11,
                "city" => "Lourdes",
                "time" => "11:30",
                "company" => "Jesus Airlines",
                "gate" => 13,
                "seats" => [
                    "total" => 156,
                    "occupied" => 150,
                ],
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 45,
                "city" => "Francoforte",
                "time" => "19:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 190,
                    "occupied" => 145,
                ],
                "cover" => "https://picsum.photos/600/400",
            ]
        ],
        "arrival" => [
            [
                "id" => 56,
                "city" => "Rotterdam",
                "time" => "11:30",
                "company" => "Norwegian",
                "gate" => 1,
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 78,
                "city" => "Dublino",
                "time" => "15:30",
                "company" => "EasyJet",
                "gate" => 3,
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 101,
                "city" => "Parigi",
                "time" => "19:30",
                "company" => "Air France",
                "gate" => 3,
                "cover" => "https://picsum.photos/600/400",
            ],
        ],
    ];


    public function voli()
    {
        return view('homepage', ['voli' => self::$flights]);
    }



    public function detail($id)
    {

        foreach (self::$flights['departure'] as $flight) {
            if ($flight['id'] == $id) {

                if ($flight['seats']['occupied'] >= $flight['seats']['total']) {
                    $posti = "Posti esauriti";
                } else if ($flight['seats']['occupied'] < $flight['seats']['total']) {
                    $posti = $flight['seats']['total'] - $flight['seats']['occupied'];
                    $posti = "Posti disponibili = $posti";
                }
                return view('detail', ['dettagli' => $flight, 'posti' => $posti]);
            }
        }

        foreach (self::$flights['arrival'] as $flight) {
            if ($flight['id'] == $id) {
                $posti = "Aereo in arrivo";
                return view('detail', ['dettagli' => $flight, 'posti' => $posti]);
            }
        }
        abort(404);

        /*         foreach($flight['seats'] as $seat) {
            if($seat) {
                if($seat['occupied'] >= $seat['total']) {
                    $posti = "Posti esauriti";
                    return view('detail', ['posti' => $posti]);
                }
                else if($seat['occupied'] < $seat['total']) {
                    $posti = $seat['total'] - $seat['occupied'];
                    $posti2 = "Posti disponibili = $posti";

                    return view('detail', ['posti' => $posti2]);
                }
            }
   
        } */
    }
}
