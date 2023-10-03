<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;



class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsersFromEndpoint();
        $perPage = 20; 
        $currentPage = Paginator::resolveCurrentPage('page');
        $usersCollection = collect($users); 
        $pagedData = $usersCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $users = new LengthAwarePaginator($pagedData, count($usersCollection), $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
        ]);
    
        return view('users.index', ["users" => $users]);
    }
}

