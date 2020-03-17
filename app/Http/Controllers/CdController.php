<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdController extends Controller
{
    public function index()
    {
        $data = [
            'cds' => [
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                    'title' => 'New Jersey',
                    'author' => 'Bon Jovi',
                    'year' => 1988
                ],
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                    'title' => 'Live at Wembley 86',
                    'author' => 'Queen',
                    'year' => 1992
                ],
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg', 
                    'title'=> 'Ten\'s Summoner\'s Tales',
                    'author' => 'Sting',
                    'year' => 1993
                ],
            ],
            'generi' => [
                'folk',
                'pop'
            ],
            'pippo' => 'Ciao Pippo'
        ];

        $cds =
            [
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                    'title' => 'New Jersey',
                    'slug' => 'new-jersey',
                    'author' => 'Bon Jovi',
                    'year' => 1988,
                    'genere' => 'folk'
                ],
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                    'title' => 'Live at Wembley 86',
                    'slug' => 'live-at-wembley-86',
                    'author' => 'Queen',
                    'year' => 1992,
                    'genere' => 'folk'
                ],
                [
                    'img' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                    'title' => 'Ten\'s Summoner\'s Tales',
                    'slug' => 'ten-summoner-tales',
                    'author' => 'Sting',
                    'year' => 1993,
                    'genere' => 'folk'
                ],
            ];

            

         return view('cds', $data);
        // return view('cds', ['cds' => $cds, 'genere' => $genere]);
        //return view('cds', compact('cds'));
    }

    public function show($slug) {
        // se lo slug è uguale allo slag del tuo cd allora fai vedere questo cd
        $cd = [
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'title' => 'New Jersey',
            'slug' => 'new-jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'genere' => 'folk'
        ];
        return view('show', compact('cd'));
    }
}
