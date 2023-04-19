<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TriController extends Controller
{
    public function sort_by_ASC () {
    $vgData = DB::table('data')
    ->orderBy('Rank', 'asc')
    ->orderBy('Platform', 'asc')
    ->orderBy('Year', 'asc')
    ->orderBy('Genre', 'asc')
    ->orderBy('Publisher', 'asc')
    ->orderBy('NA_Sales', 'asc')
    ->orderBy('EU_Sales', 'asc')
    ->orderBy('JP_Sales', 'asc')
    ->orderBy('Other_Sales', 'asc')
    ->orderBy('Global_Sales', 'asc')
    ->get();
    return view('show_data', compact('vgData'));
    }

    public function sort_by_DESC () {
        $vgData = DB::table('data')
        ->orderBy('Rank', 'desc')
        ->orderBy('Platform', 'desc')
        ->orderBy('Year', 'desc')
        ->orderBy('Genre', 'desc')
        ->orderBy('Publisher', 'desc')
        ->orderBy('NA_Sales', 'desc')
        ->orderBy('EU_Sales', 'desc')
        ->orderBy('JP_Sales', 'desc')
        ->orderBy('Other_Sales', 'desc')
        ->orderBy('Global_Sales', 'desc')
        ->get();
        return view('show_data', compact('vgData'));
        }
}
