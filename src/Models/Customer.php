<?php

namespace Models;

/**
 * Definition of Customer object.
 *
 * @property string $username
 * @property string $company_name
 * @property bool $taxable
 * @property int $discount
 * @property bool $opt_out_email
 * @property bool $opt_out_text
 * @property string $date_created
 * @property array $contact_info
 */
class Customer
{

    public string $username;
    public string $company_name;
    public bool $taxable;
    public int $discount;
    public bool $opt_out_email;
    public bool $opt_out_text;
    public string $date_created;
    public array $contact_info;

    public function __construct()
    {
        return $this;
    }
}
