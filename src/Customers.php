<?php

use GuzzleHttp\Client;

class Customers {

  public function __construct() {
    $this->email = "devtesting"; // Normally this would come from an environment variable or config file
    $this->password = "devtesting1"; // Normally this would come from an environment variable or config file
  }

  /**
   * Create a customer.
   * @param  string $courseId
   * @param stdClass $customer
   * @return stdClass
   */
  public function createCustomer(string $courseId, stdClass $customer) : stdClass {
    // Im thinking I should have a customer class object within this project that I am using
    $client = new Client();

    $response = $client->request('POST', 'https://mobile.foreupsoftware.com/api_rest/index.php/courses/' . $courseId . '/customers', [
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
      //get error message? return it?
    }
  }
}
