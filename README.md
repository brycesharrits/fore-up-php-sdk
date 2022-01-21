PHP SDK for foreUp API

To create a token:
```
$authenticate = new \ForeUp\ApiOperations\Authentication('email', 'pass');
$token = $authenticate->createToken();
echo $token;
```

To create a customer:
```
$contactInfo = new \ForeUp\Models\ContactInfo();
$contactInfo->id = "12345";
$contactInfo->first_name = "Bob";
...set the rest of the fields

$customer = new \ForeUp\Models\Customer();
$customer->contact_info = (array) $contactInfo;
$customer->username = "ExampleUsername";
$customer->company_name = "ExampleCompany";
...set the rest of the fields

$customerOperations = new \ForeUp\ApiOperations\Customers('token');
$response = $customerOperations->createCustomer('courseId', $customer);
```
