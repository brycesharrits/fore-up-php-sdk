<?php

namespace ApiOperations;

use GuzzleHttp\Client;

class Authentication {

  public function __construct() {
    $this->email = "devtesting"; // Normally this would come from an environment variable or config file
    $this->password = "devtesting1"; // Normally this would come from an environment variable or config file
  }

  /**
   * Create a token.
   *
   */
  public function createToken() : string {
    $client = new Client();

    $response = $client->request('POST', 'https://mobile.foreupsoftware.com/api_rest/index.php/tokens', [
      'body' => [
        'email' => $this->email,
        'password' => $this->password,
      ]
    ]);

    if ($response->getStatusCode() == 200) {
      $data = json_decode($response->getBody());
      return $data->data->id;
    } else {
      //get error message? return it?
    }
  }
}
