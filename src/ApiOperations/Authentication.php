<?php

namespace ApiOperations;

use GuzzleHttp\Client;

class Authentication
{

    public $email;
    public $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Create a token.
     *
     */
    public function createToken() : string
    {
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
