<?php

namespace App\Http\Controllers;

use App\Models\TableName;

class TableNameController extends Controller
{
public function index()
{
    $data = TableName::all();
    return view('table.index', ['data' => $data]);
}

}
