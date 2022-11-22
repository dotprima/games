<?php

namespace App\Http\Livewire;
use App\Models\Gamesinfo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
class PostList extends Component
{
    use WithPagination;
  
    public function render()
    {
        $limit = 5;
        $games = DB::collection('gamesinfo')->where('release_date.coming_soon', '=', false)->orderByDesc('release_date.date')
            ->paginate($limit);
        $banner = Gamesinfo::orderBy("RAND()")->limit(5)->get();
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
