<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Videogame;
use App\Mail\VideogameDeleteMail;

class ApiController extends Controller
{
    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }

    public function deleteVideogame($id) {

        $videogame = Videogame::findOrFail($id);

        $videogame -> delete();

        Mail::to('test@test.com') -> send(new VideogameDeleteMail());

        return json_encode($videogame);

    }
}
