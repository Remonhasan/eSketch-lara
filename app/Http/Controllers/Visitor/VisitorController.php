<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Visitor\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Get Visitor Details
     *
     * @return void
     */
    public function getVisitorDetails()
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $visit_time = date("h:i:sa");
        $visit_date = date("d-m-Y");

        $result = VisitorModel::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);

        return $result;
    }
}
