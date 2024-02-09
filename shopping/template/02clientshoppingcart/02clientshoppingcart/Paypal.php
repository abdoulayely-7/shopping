    public function payer(Request $request){

        try{

            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
    
            $order = new Order();
            $order->names = $request->input('firstname')." ".$request->input('lastname');
            $order->address = $request->input('address');
            $order->cart = serialize($cart);

            Session::put('order', $order);

            $checkoutData = $this->checkoutData();

            $provider = new ExpressCheckout();
    
            $response = $provider->setExpressCheckout($checkoutData);
    
            return redirect($response['paypal_link']);

        }
        catch(\Exception $e){
            return redirect('/cart')->with('status', $e->getMessage());
        }

    }

    private function checkoutData(){

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        $data['items'] = [];

        foreach($cart->items as $item ){
                $itemDetails=[
                'name' => $item['product_name'],
                'price' => $item['product_price'],
                'qty' => $item['qty']
                ];

            $data['items'][] = $itemDetails;            
        }

        $checkoutData = [
            'items' => $data['items'],
            'return_url' => url('/paymentSuccess'),
            'cancel_url' => url('/cart'),
            'invoice_id' => uniqid(),
            'invoice_description' => "order description",
            'total' => Session::get('cart')->totalPrice
        ];

        return $checkoutData;
    }

    public function paymentSuccess(Request $request){

        try{

		    $token = $request->get('token');
        	$payerId = $request->get('PayerID');
        	$checkoutData = $this->checkoutData();

        	$provider = new ExpressCheckout();
        	$response = $provider->getExpressCheckoutDetails($token);
        	$response = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);

            Session::get('order')->save();

            Session::forget('cart');
            Session::forget('topCart');

            return redirect('/cart')->with('status', 'Votre commande a été effectuée avec succès !! ');
        }
        catch(\Exception $e){
            return redirect('/cart')->with('status', $e->getMessage());
        }
    }