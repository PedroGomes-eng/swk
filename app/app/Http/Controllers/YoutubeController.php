<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Youtuber;

class YoutubeController extends BaseController
{
    /**
     * Adicionar um youtuber
     */
    public function create($youtuberName){
        try{
            $youtuber = Youtuber::create([
                'name' => $youtuberName
            ]);

            $youtuber->save(); //grava na db

            return $youtuber;
        }catch(Exception $e) {
            return response($e->getMessage(), 500);
        }
    }
}
