<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 */

	public function show()
	{
		return Project::with(['project_images.tags'])->get();
	}
	public function tags()
	{
		return Tag::all();
	}
	/**
	 * Show the application dashboard.
	 *
	 */
	public function index()
	{
		return view('home');
	}
}
