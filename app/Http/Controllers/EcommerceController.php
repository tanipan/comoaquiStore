<?php

namespace App\Http\Controllers;

use Mapper;
use App\Models\Huber;
use App\Jobs\SendEmailJob;
//use App\Mail\HuberCreated;
//use GoogleMaps\GoogleMaps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateHuberRequest;
use App\Jobs\SendEmailEcommerceJob;
use TeamPickr\DistanceMatrix\DistanceMatrix;
use TeamPickr\DistanceMatrix\Licenses\StandardLicense;

class EcommerceController extends Controller
{
    public function createecommerce(Request $request)
    {
        $ecom = $request->all();

        dispatch(new SendEmailEcommerceJob((object)$ecom));
    }
}
