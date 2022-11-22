<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Gamesinfo;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('release_date.coming_soon', '=', false)->orderByDesc('release_date.date')
            ->paginate($limit);
        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];
        return view('welcome', $data);
    }

    public function genre($id)
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('genres.description', '=', $id)
            ->paginate($limit);
        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }

    public function categories($id)
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('categories.description', '=', $id)
            ->paginate($limit);

        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }

    public function developers($id)
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('developers', '=', $id)
            ->paginate($limit);

        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }

    public function publishers($id)
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('publishers', '=', $id)
            ->paginate($limit);

        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }

    public function search($id)
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('name', 'like', '%' . $id . '%')
            ->paginate($limit);

        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }

    public function populer()
    {

        $limit = 5;
        $games = DB::collection('gamesinfo')->where('metacritic.score', '>', '20')
            ->paginate($limit);

        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
        $data = [
            'games' => $games,
            'banner' => $banner
        ];

        return view('welcome', $data);
    }
}
