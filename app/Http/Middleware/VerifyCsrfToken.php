<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/account/seller/get-data-kelurahan-for-marker/',
        '/product/checkarea/',
        '/product/details/',
        '/account-seller/product/add/main-product',
        '/tes-s3-cloudkilat',
        '/account/seller/branch/apply-new-branch',
        '/tes-kirim-wa',
        '/get/location/provinsi',
        '/get/location/kelurahan'
    ];
}
