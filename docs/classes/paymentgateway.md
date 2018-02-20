[Payment Rails PHP SDK](../README.md) > [PaymentGateway](../classes/paymentgateway.md)

# Class: PaymentGateway

## Index

### Methods

* [create](paymentgateway.md#create)
* [find](paymentgateway.md#find)
* [remove](paymentgateway.md#remove)
* [search](paymentgateway.md#search)
* [update](paymentgateway.md#update)

---

## Methods

<a id="create"></a>

### create

► **create**(batchId: *`string`*, body: *`any`*): `Payment`

*Defined in [PaymentGateway.php:55](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/Gateway.php#L55)*

Create a new payment in a batch

    $response = PaymentRails\Batch::create('B-123456', [
        'recipient' => [ 'id' => 'R-1a2B3c4D5e6F7g8H9i0J1k' ],
        'sourceAmount' => "100.10",
        'memo' => 'Freelance payment'
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails payment id (e.g. "B-xx999bb") |
| body | `any`   |  Payment information |

**Returns:** `Payment`

---

<a id="find"></a>

### find

► **find**(paymentId: *`string`*): `Payment`

*Defined in [PaymentGateway.php:34](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/Gateway.php#L34)*

Find a specific payment

    $response = PaymentRails\Batch::find('B-12345', 'P-12345');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| paymentId | `string`   |  Payment Rails payment id (e.g. "P-aabccc") |

**Returns:** `Payment`

---

<a id="delete"></a>

### delete

► **delete**(paymentId: *`string`*, batchId: *`string`*): `boolean`

*Defined in [PaymentGateway.php:90](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/Gateway.php#L90)*

Delete a given payment -- Note you can only delete non processed payments

    $response = PaymentRails\Batch::delete('B-12345', 'P-12345');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| paymentId | `string`   |  Payment Rails payment id (e.g. "P-aabccc") |
| batchId | `string`   |  Payment Rails payment id (e.g. "B-xx999bb") |

**Returns:** `boolean`

---

<a id="search"></a>

### search

► **search**(batchId: *`string`*, page?: *`number`*, pageSize?: *`number`*, term?: *`string`*): `Payment`[]

*Defined in [PaymentGateway.php:105](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/Gateway.php#L105)*

Search for payments in a given batch

**Parameters:**

| Param | Type | Default value | Description |
| ------ | ------ | ------ | ------ |
| batchId | `string`  | - |   Payment Rails payment id (e.g. "B-xx999bb") |
| page | `number`  | 1 |   Page number (1 based) |
| pageSize | `number`  | 10 |   Page size (0...1000) |
| term | `string`  | &quot;&quot; |   Any search terms to look for |

**Returns:** `Payment`[]

---

<a id="update"></a>

### update

► **update**(paymentId: *`string`*, batchId: *`string`*, body: *`any`*): `boolean`

*Defined in [PaymentGateway.php:74](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/Gateway.php#L74)*

Update a given payment

    $response = PaymentRails\Batch::update('B-123456', [
        'sourceAmount' => "100.10",
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| paymentId | `string`   |  Payment Rails payment id (e.g. "P-aabccc") |
| batchId | `string`   |  Payment Rails payment id (e.g. "B-xx999bb") |
| body | `any`   |  Payment update information |

**Returns:** `boolean`

---