<?php

namespace App\Http\Livewire;
use App\Models\Gamesinfo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
class PostList extends Component
{
    use WithPagination;

    public $foo;
    public $search = '';
    public $page = 1;
 
    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {
        $limit = 5;
        $banner = Gamesinfo::select('steam_appid','name', 'genres','header_image')->orderBy("RAND()")->limit(5)->get();
        if(!$this->search==null){
            $games = DB::collection('gamesinfo')->select('steam_appid','name', 'genres','header_image')
            ->where('release_date.coming_soon', '=', false)->where('name', 'like', '%'.$this->search.'%')
            ->orderByDesc('release_date.date')
            ->paginate($limit);
        }else{
            $games = DB::collection('gamesinfo')->select('steam_appid','name', 'genres','header_image')
            ->where('release_date.coming_soon', '=', false)
            ->orderByDesc('release_date.date')
            ->paginate($limit);
        }
        
        $data = [
            'games' => $games,
            'banner' => $banner
        ];
        return view('livewire.post-list',$data);
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }
}
