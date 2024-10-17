<?php

namespace App\Http\Controllers;
use app\Models\comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){
        $data = [
            "title" => "Wedding_nama",
            "main-image" => "kosong.jpg",
            "wedding-date" => "2024-10-15 13:00:00",
            "groom-nama" => "mempelai-pria",
            "bride-nama" => "mempelai-wanita",
            "groom-photo" => "folder/namafile.jpg",
            "bride-photo" => "folder/namafile.jpg",
            "groom-father-nama" => "nama papa pria",
            "groom-mother-nama" => "nama mama pria",
            "bride-father-nama" => "nama papa wanita",
            "bride-mother-nama" => "nama mama wanita",
            "groom-sosmed" => "linkIG",
            "bride-sosmed" => "linkIG",
            "akad-start-date" => "2024-10-15 13:00:00",
            "akad-end-date" => "2024-10-15 13:00:00",
            "akad-place-nama" => "Gedung xyz",
            "akad-address" => "Jl. Kebahagiaan",
            "akad-maps" => "link gmaps",
            "reception-start-date" => "2024-10-15 13:00:00",
            "reception-end-date" => "2024-10-15 13:00:00",
            "reception-place-nama" => "Gedung xyz",
            "reception-address" => "Jl. Dekat Bahagia",
            "reception-maps" => "link gmaps",
            "gift-qr-image" => "img/r.image",
            "gallery" => [
                ["link" => "img/pict1.jpg"],
                ["link" => "img/pict2.jpg"],
                ["link" => "img/pict3.jpg"],
                ["link" => "img/pict4.jpg"],
                ["link" => "img/pict5.jpg"],
            ],
            "journey" => [
                [
                    "title" => "title 1",
                    "story" => "story 1",
                    "date" => ""
                ],
                [
                    "title" => "title 2",
                    "story" => "story 2",
                    "date" => ""
                ],
                [
                    "title" => "title 3",
                    "story" => "story 3",
                    "date" => ""
                ],
                [
                    "title" => "title 4",
                    "story" => "story 4",
                    "date" => ""
                ],
                [
                    "title" => "title 5",
                    "story" => "story 5",
                    "date" => ""
                ]
            ]
        ];

$data["comments"] = Comment:: all()->sortByDesc('created_at');
return view('theme', ['data' => (object) $data]);
    }
};