<?php

namespace Models;

/**
 * Definition of ContactInfo object.
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $cell_phone_number
 * @property string $email
 * @property string $birthday
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $handicap_account_number
 * @property string $handicap_score
 * @property string $comments
 */
class ContactInfo
{

    public string $id;
    public string $first_name;
    public string $last_name;
    public string $phone_number;
    public string $cell_phone_number;
    public string $email;
    public string $birthday;
    public string $address_1;
    public string $address_2;
    public string $city;
    public string $state;
    public string $zip;
    public string $country;
    public string $handicap_account_number;
    public string $handicap_score;
    public string $comments;

    public function __construct()
    {
        return $this;
    }
}
