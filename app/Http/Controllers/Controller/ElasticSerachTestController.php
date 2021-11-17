<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use ElasticScoutDriverPlus\Support\Query;

class ElasticSerachTestController extends Controller
{
    public function index(){

        // HELPER'S KULLANILARAK ARAMA
        $qurey = Query::match()
            ->field('name')
            ->query('Zane')
            ->fuzziness('AUTO');
        $user = User::searchQuery($qurey)->execute();

        // RAW KULLANARAK ARAMA
        $query = [
            'match' => [
                'name' => [
                    'query' => 'Zane',
                    'fuzziness' => 'AUTO'
                ]
            ]
        ];
        $user = User::search($query)->executive();

        dd($user);
    }
}
/* Her İki şekilde de arama yapılabilmektedir. Fakat arama için sağlam RAM lazım.
 * */
