<?php

namespace App\Controllers;

use App\Models\UserModel;

// Users controller handles the User Accounts page (/users).
class Users extends BaseController
{
    public function index()
    {
        // Retrieve all user records from the database through the Model.
        $model = new UserModel();
        $users = $model->findAll();

        // Pass the records to the view as 'users' so the view can loop over them.
        return view('users', ['users' => $users]);
    }
}