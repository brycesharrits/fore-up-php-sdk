<?php

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
 */
class Customer extends stdClass
{
    public string $username;
    public string $company_name;
    public bool $taxable;
    public int $discount;
    public bool $opt_out_email;
    public bool $opt_out_text;
    public string $date_created;
}
