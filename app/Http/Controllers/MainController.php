<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $json['jogador'] = json_encode(json_decode(Storage::get('public/json/jogador.json')));
        $json['partida'] = json_encode(json_decode(Storage::get('public/json/partida.json')));
        $json['rank-amigos'] = json_encode(json_decode(Storage::get('public/json/rank-amigos.json')));
        $json['rank-general'] = json_encode(json_decode(Storage::get('public/json/rank-general.json')));
        $json['reserva'] = json_encode(json_decode(Storage::get('public/json/reserva.json')));
        return view('site.modules.home.index', compact('json'));
    }
}
