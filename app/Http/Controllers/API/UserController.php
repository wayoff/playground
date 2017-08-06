<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Transformers\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = \App\Models\User::paginate(5);

    	return (new User\DefaultTransformer())->transformPagination($users);
    }
}
