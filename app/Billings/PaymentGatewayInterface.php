<?php
namespace App\Billings;

use Illuminate\Http\Request;

interface PaymentGatewayInterface
{
    public function process(Request $request);
    public function checkout($res);
}
