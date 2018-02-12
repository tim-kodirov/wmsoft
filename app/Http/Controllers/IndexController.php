<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Portfolio;

class IndexController extends Controller
{
    

    public function index(){
    	$services = Service::all();
    	$portfolios = Portfolio::all();

    	return view('index')->withServices($services)->withPortfolios($portfolios);
    }
}
