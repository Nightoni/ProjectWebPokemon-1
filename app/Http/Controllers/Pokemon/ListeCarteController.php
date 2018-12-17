<?php
namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use Pokemon\Pokemon;

class ListeCarteController extends Controller
{

    public function index()
    {

        // $sets = Pokemon::Set()->all();

        // foreach ($sets as $model) {
        // // print_r($model->toArray());
        // print_r($model->toJson());
        // }
        $cardArray = [];
        foreach ($user->getCards() as $card) {
            $cardArray[] = Pokemon::Card()->where([
                'id' => $card->id,
                'series' => 'SM',
            ]);
            
        }
        
        return $cardArray;
      
        // $response = Pokemon::Card()->all();
        // foreach ($response as $model) {
        // // print_r($model->toArray());
        // print_r($model->toJson());
        // }
        // $cards = Pokemon::Card()->where([
        // 'page' => 5,
        // 'pageSize' => 200
        // ])->all();

        // foreach ($cards as $model) {
        // // print_r($model->toArray());
        // print_r($model->toJson());
        // }

        // $cards = Pokemon::Card()->where([
        // 'set' => 'generations'
        // ])
        // ->where([
        // 'supertype' => 'pokemon'
        // ])
        // ->all();

        // $sets = Pokemon::Set()->all();
        // $cards = [];
        // foreach ($sets as $set) {
        // $cards[$set->getName()] = Pokemon::Card()->where([
        // 'set' => $set->getName(),
        // 'pageSize' => 1000

        // ])->all();
        // }

        // $true = true;
        // var_dump($true);
    }
}