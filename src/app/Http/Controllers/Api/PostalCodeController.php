<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostalCode;
use Illuminate\Http\Request;

class PostalCodeController extends Controller
{
    public function postal_code($zip)
    {
        $postal_code = PostalCode::where('zip', $zip)->first();
        return response()->json(
            $postal_code,
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}