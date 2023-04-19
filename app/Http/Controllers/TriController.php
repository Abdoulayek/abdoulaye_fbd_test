<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TriController extends Controller
{
    public function sort_by_ASC () {
    $vgData = DB::table('data')
    ->orderBy('Rank', 'ASC')
    ->orderBy('Platform', 'ASC')
    ->orderBy('Year', 'ASC')
    ->orderBy('Genre', 'ASC')
    ->orderBy('Publisher', 'ASC')
    ->orderBy('NA_Sales', 'ASC')
    ->orderBy('EU_Sales', 'ASC')
    ->orderBy('JP_Sales', 'ASC')
    ->orderBy('Other_Sales', 'ASC')
    ->orderBy('Global_Sales', 'ASC')
    ->get();
    return view('show_data', compact('vgData'));
    }
}
