<?php

namespace ApiOperations;

use GuzzleHttp\Client;
use Models\Customer;

class Customers
{
    public $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Create a customer.
     * @param  string $courseId
     * @param Customer $customer
     * @return Customer
     */
    public function createCustomer(string $courseId, Customer $customer) : Customer
    {
        $client = new Client();

        $response = $client->request('POST', 'https://mobile.foreupsoftware.com/api_rest/index.php/courses/' . $courseId . '/customers', [
            'auth' => $this->token,
            'body' => [
                'data' => [
                    'type' => 'customers',
                    'attributes' => $customer,
                ]
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody());
            return $data->data->attributes;
        } else {
            //Get error message? Return it?
        }
    }
}
