[Payment Rails PHP SDK](../README.md) > [BatchGateway](../classes/BatchGateway.md)

# Class: BatchGateway

Gateway class for batches
*__class__*: BatchGateway

## Index

### Methods

* [create](BatchGateway.md#create)
* [find](BatchGateway.md#find)
* [generateQuote](BatchGateway.md#generatequote)
* [paymentList](BatchGateway.md#paymentlist)
* [delete](BatchGateway.md#delete)
* [search](BatchGateway.md#search)
* [processBatch](BatchGateway.md#processBatch)
* [summary](BatchGateway.md#summary)
* [update](BatchGateway.md#update)

---

## Methods

<a id="create"></a>

### create

► **create**(batch: *`Batch`*): `Batch`

*Defined in [BatchGateway.php:95](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L95)*

Creates a batch with optional payments. This is the interface that is provide by the [Create Batch](http://docs.paymentrails.com/api/#create-a-batch) API

    $response = PaymentRails\Batch::create([
        'sourceCurrency' => 'CAD',
        'payments' => [
            'recipient' => [ 'id' => 'R-1a2B3c4D5e6F7g8H9i0J1k' ],
            'sourceAmount' => "65",
            'memo' => ''
        ]
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batch | `Batch`   |  - |

**Returns:** `Batch`

---

<a id="find"></a>

### find

► **find**(batchId: *`string`*): `Batch`

*Defined in [BatchGateway.php:67](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L67)*

Retrieves a batch based on the batch id

    $response = PaymentRails\Batch::find('B-12345');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails batch id (e.g. "B-xx999bb") |

**Returns:** `Batch`

---

<a id="generatequote"></a>

### generateQuote

► **generateQuote**(batchId: *`string`*): `Batch`

*Defined in [BatchGateway.php:182](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L182)*

Generate a FX quote for this batch

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails payment id (e.g. "B-xx999bb") |

**Returns:** `Batch`

---

<a id="paymentlist"></a>

### paymentList

► **paymentList**(batchId: *`string`*, page?: *`number`*, pageSize?: *`number`*): `Promise`.<`Payment`[]>

*Defined in [BatchGateway.php:166](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L166)*

Return a paginated list of payments for this batch

**Parameters:**

| Param | Type | Default value | Description |
| ------ | ------ | ------ | ------ |
| batchId | `string`  | - |   Payment Rails payment id (e.g. "B-xx999bb") |
| page | `number`  | 1 |   starting a 1 |
| pageSize | `number`  | 10 |   in the range 0...1000 |

**Returns:** `Payment`[]

---

<a id="delete"></a>

### delete

► **delete**(batchId: *`string`*): `Boolean`

*Defined in [BatchGateway.php:132](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L132)*

Delete the given batch

    $response = PaymentRails\Batch::delete('B-123456');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails batch (e.g. "B-xx999bb") |

**Returns:** `Boolean`

---

<a id="search"></a>

### search

► **search**(page?: *`number`*, pageSize?: *`number`*, term?: *`string`*): `Batch`[]

*Defined in [BatchGateway.php:146](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L146)*

Search for a batch matching the given term

**Parameters:**

| Param | Type | Default value | Description |
| ------ | ------ | ------ | ------ |
| page | `number`  | 1 |   - |
| pageSize | `number`  | 10 |   - |
| term | `string`  | &quot;&quot; |   string search term |

**Returns:** `Batch`[]

---

<a id="processBatch"></a>

### processBatch

► **processBatch**(batchId: *`string`*): `Batch`

*Defined in [BatchGateway.php:194](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L194)*

Start processing this batch

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails batch id (e.g. "B-xx999bb") |

**Returns:** `Batch`

---

<a id="summary"></a>

### summary

► **summary**(batchId: *`string`*): `String`

*Defined in [BatchGateway.php:206](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/BatchGateway.php#L206)*

Get a transaction totaled summary for this batch

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| batchId | `string`   |  Payment Rails payment id (e.g. "B-xx999bb") |

**Returns:** `String`

---