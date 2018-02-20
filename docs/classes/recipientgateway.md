[Payment Rails PHP SDK](../README.md) > [RecipientGateway](../classes/RecipientGateway.md)

# Class: RecipientGateway

## Index

### Methods

* [create](RecipientGateway.md#create)
* [find](RecipientGateway.md#find)
* [remove](RecipientGateway.md#remove)
* [search](RecipientGateway.md#search)
* [update](RecipientGateway.md#update)

---

## Methods

<a id="create"></a>

### create

► **create**(body: *[Recipient](../types/recipient.md)*): `Recipient`

*Defined in [RecipientGateway.php:82](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientGateway.php#L82)*

Create a given recipient

    $recipient = PaymentRails\Recipient::create([
        'type' => "individual",
        'firstName' => 'Tom',
        'lastName' => 'Jones',
        'email' => 'jsmith@example.com',
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| body | [Recipient](../types/recipient.md)   |  The recipient information to create |

**Returns:** `Recipient`

---

<a id="find"></a>

### find

► **find**(recipientId: *`string`*): `Recipient`

*Defined in [RecipientGateway.php:58](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientGateway.php#L58)*

Find a specific recipient by their Payment Rails recipient ID

$recipient = PaymentRails\Recipient::find('R-123456');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |

**Returns:** `Recipient`

---

<a id="delete"></a>

### delete

► **delete**(recipientId: *`string`*): `boolean`

*Defined in [RecipientGateway.php:115](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientGateway.php#L115)*

Delete the given recipient.

    $response = PaymentRails\Recipient::delete('R-12345');

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |

**Returns:** `boolean`

---

<a id="search"></a>

### search

► **search**(page: *`number`*, pageSize: *`number`*, term: *`string`*): `Recipient`[]

*Defined in [RecipientGateway.php:123](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientGateway.php#L123)*

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| page | `number`   |  - |
| pageSize | `number`   |  - |
| term | `string`   |  - |

**Returns:** `Recipient`[]

---

<a id="update"></a>

### update

► **update**(body: *[Recipient](../types/recipient.md)*): `boolean`

*Defined in [RecipientGateway.php:100](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientGateway.php#L100)*

Update the given recipient

    $response = PaymentRails\Recipient::update('R-123456', [
        "firstName" => "Mark",
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| body | [Recipient](../types/recipient.md)   |  the changes to make to the recipient |

**Returns:** `boolean`

---