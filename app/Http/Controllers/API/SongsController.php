<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Songs;
use Illuminate\Http\Request;
use Flash;
use Response;

class SongsController extends Controller {

    public $successStatus = 200;

    public function songsApi() {
        $songs = Songs::all();

        if (count($songs) > 0) {
            return response()->json(['songs'=>$songs], $this->successStatus);
        } else {
            return response()->json(['Error' => 'There are no songs in the database'], 404);
        }        
    }
}

?>