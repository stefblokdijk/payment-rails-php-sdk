[Payment Rails PHP SDK](../README.md) > [RecipientAccountGateway](../classes/recipientaccountgateway.md)

# Class: RecipientAccountGateway

## Index

### Methods

* [findAll](recipientaccountgateway.md#findAll)
* [create](recipientaccountgateway.md#create)
* [find](recipientaccountgateway.md#find)
* [remove](recipientaccountgateway.md#remove)
* [update](recipientaccountgateway.md#update)

---

## Methods

<a id="all"></a>

### all

► **all**(recipientId: *`string`*): `List<RecipientAccount>`(recipientaccount.md)[]>

*Defined in [RecipientAccountGateway.php:33](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientAccountGateway.php#L33)*

Fetch all of the accounts for a given Payment Rails recipient

    $response = PaymentRails\RecipientAccount::all($recipient_id);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |

**Returns:** `List<RecipientAccount>(recipientaccount.md)[]>

---

<a id="create"></a>

### create

► **create**(recipientId: *`string`*, body: *`RecipientAccount`*): `RecipientAccount`(recipientaccount.md)>

*Defined in [RecipientAccountGateway.php:79](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientAccountGateway.php#L79)*

Create a new recipient account

    $response = PaymentRails\RecipientAccount::create($recipient_id, [
        "type" => "bank-transfer",
        "primary" => "true",
        "country" => "CA",
        "currency" => "CAD",
        "accountNum" => "012345678",
        "bankId" => "004",
        "branchId" => "47261",
        "accountHolderName" => "John Smith"
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |
| body | `string`   |  Account information |

**Returns:** `RecipientAccount`(recipientaccount.md)>

---

<a id="find"></a>

### find

► **find**(recipientId: *`string`*, accountId: *`string`*): `RecipientAccount`(recipientaccount.md)>

*Defined in [RecipientAccountGateway.php:52](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientAccountGateway.php#L52)*

Fetch a specific account for a given Payment Rails recipient

    $recipient_id = 'R-12345';
    $account_id = 'A-12345';

    $response = PaymentRails\RecipientAccount::find($recipient_id, $account_id);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |
| accountId | `string`   |  The Payment Rails account ID (e.g. A-xyzzy) |

**Returns:** `RecipientAccount`(recipientaccount.md)>

---

<a id="delete"></a>

### delete

► **delete**(recipientId: *`string`*, accountId: *`string`*): `boolean`

*Defined in [RecipientAccountGateway.php:121](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientAccountGateway.php#L121)*

Delete the given recipient account. This will only return success, otherwise it will throw an exception (e.g. NotFound)

    $recipient_id = 'R-PuzPJLVYQXBbPSMQKwmJ5G';
    $account_id = 'A-KKHb8MpFvju6vDMBLPmtej';

    $response = PaymentRails\RecipientAccount::delete($recipient_id, $account_id);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |
| accountId | `string`   |  The Payment Rails account ID (e.g. A-xyzzy) |

**Returns:** `boolean`

---

<a id="update"></a>

### update

► **update**(recipientId: *`string`*, accountId: *`string`*, body: *`RecipientAccount`*): `RecipientAccount`(recipientaccount.md)>

*Defined in [RecipientAccountGateway.php:102](https://github.com/PaymentRails/php-sdk/tree/master/lib/PaymentRails/RecipientAccountGateway.php#L102)*

Update a recipient account. Note: Updating an account will create a new account ID if it contains any property that isn't just "primary"

    $recipient_id = 'R-123';
    $account_id = 'A-123';

    $response = PaymentRails\RecipientAccount::update($recipient_id, $account_id, [
        "primary" => false,
    ]);

**Parameters:**

| Param | Type | Description |
| ------ | ------ | ------ |
| recipientId | `string`   |  The Payment Rails recipient ID (e.g. R-xyzzy) |
| accountId | `string`   |  The Payment Rails account ID (e.g. A-xyzzy) |
| body | `any`   |  Account information |

**Returns:** `RecipientAccount`(recipientaccount.md)>

---