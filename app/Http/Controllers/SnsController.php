<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class SnsController extends Controller
{
    public function store(Request $request)
    {

        $json_data = $request->getContent();

        $aws = AWS::createClient('sns');

        $aws->publish([
            'Message' => $json_data,
            'TargetArn' => 'arn:aws:sns:eu-west-1:310005059065:sns_new_sale'
        ]);

        return 'Success';
    }
}
