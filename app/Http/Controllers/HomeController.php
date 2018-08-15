<?php

namespace App\Http\Controllers;

use App\Task;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Inspiring;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        if (!$categories) {
            return 'Problem with database: NO CATEGORIES';
        }

        $tasks = Task::all();

        $quote = Inspiring::quote();
        
        return view('index', compact('categories', 'tasks', 'quote'));
    }
}
