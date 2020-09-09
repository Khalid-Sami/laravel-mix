<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all('country','capital','created_at');
        return response()->json($countries->toArray());
    }

    public function tableAttributes(){
        $columns = [
            [
                'label' => 'Country',
                'field' => 'country',
            ],
            [
                'label' => 'Capital',
                'field' => 'capital',
            ],
            [
                'label' => 'Created On',
                'field' => 'created_at',
            ]
        ];
        return response()->json($columns);
    }

    public function create(Request $request){
        Country::create([
            'country' => $request->get('country'),
            'capital' => $request->get('capital')
        ]);
        return response()->json(['status' => 200]);
    }
}
