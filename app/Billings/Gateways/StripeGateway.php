<?php
namespace App\Billings\Gateways;

use App\Billings\PaymentGatewayInterface;
use Illuminate\Http\Request;

class StripeGateway implements PaymentGatewayInterface
{

    public function process(Request $request)
    {
        // TODO: Implement process() method.
    }

    public function checkout($res)
    {
        // TODO: Implement checkout() method.
    }
}
