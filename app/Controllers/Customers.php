<?php

namespace App\Controllers;

use App\Models\CustomerModel;

// Customers controller handles the Customer Accounts page (/customers).
class Customers extends BaseController
{
    public function index()
    {
          // Retrieve all customer records from the database through the Model.
        $model = new CustomerModel();
        $customers = $model->findAll();
    
        // Pass the array to the view as 'customers' so the view can loop over it.
        return view('customers', ['customers' => $customers]);
    }
}