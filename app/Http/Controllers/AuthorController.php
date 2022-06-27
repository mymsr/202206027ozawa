<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $user = $request->onliy('name','email');
        Author::create($user);
        return redirect('/thank');
    }
    public function thank()
    {
        return view('thank');
    }
}
