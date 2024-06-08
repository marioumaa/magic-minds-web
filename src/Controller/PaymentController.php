<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGenerator;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
    public function payment(Request $request): Response
    {
        $session=$request->getSession();
        $price=$session->get('totalPrice');
        $stripe = new \Stripe\StripeClient('sk_test_51M7hARHJtiyIQHNyyh2zWynv637KZhopDd0YIfeYv6VERix6VeWfqJ8wqbnF8dYO5irvoO1UeY9D8b7yWLkrrpGW00WTD7iDum');

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => $price *100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_success_url',[],UrlGenerator::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_cancel_url',[],UrlGenerator::ABSOLUTE_URL),
        ]);
        return $this->redirect($checkout_session->url,303);
    }
    #[Route('/success_url', name: 'app_success_url')]
    public function successUrl(): Response
    {
     return $this->render('payment/success.html.twig');
    }
    #[Route('/cancel_url', name: 'app_cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig');
    }
}
