<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function Termwind\renderUsing;

class PageController extends Controller
{
    public function main()
    {
        $categories = Category::paginate(8);

        return view('main')->with('categories',$categories);
    }


    public function tasnif()
    {
        return view('tasnif');
    }


    public function aloqa()
    {
        return view('aloqa');
    }


}
