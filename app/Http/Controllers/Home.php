<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Gamesinfo;
use Illuminate\Support\Facades\DB;
class Home extends Controller
{
    public function index(){

        $limit = 3;
        $startDate = Carbon::createFromFormat('M d, Y', 'Sep 28, 2015');
        $endDate = Carbon::createFromFormat('M d, Y', 'Sep 28, 2020');

        $games = DB::collection('gamesinfo')->where('release_date.coming_soon', '=', false)->orderByDesc('release_date.date')
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function genre($id){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.genres.description', '=', $id)
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function categories($id){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.categories.description', '=', $id)
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function developers($id){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.developers', '=', $id)
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function publishers($id){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.publishers', '=', $id)
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function search($id){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.name', 'like', '%'.$id.'%')
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }

    public function populer(){

        $limit = 3;
        $games = DB::collection('gamesinfo')->where('data.metacritic.score', '>', '50')
            ->paginate($limit);

        $data = [
            'games' => $games
        ];
        
        return view('welcome',$data);
    }
}
