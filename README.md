
# Iranian Validator
A laravel package for validate some Iranian values.


This package verify these values now :
- National Code (کدملی)
- IBAN (شماره شبا)
- Debit Card (شماره کارت بانکی)

## Installation ##
1) Run the command below to install via Composer
```shell
composer require majida/ir-validator
```

2) Open your `config/app.php` and add the following to the `providers` array:
```php
Majida\IrValidator\IrValidatorServiceProvider::class,
```

## Usage ##
IrValidator works same as another [Laravel Validation rules](https://laravel.com/docs/validation#available-validation-rules).

### Rules ###
- `national_code`

A rule for validating Iranian national code [(How calculated)](https://fa.wikipedia.org/wiki/%DA%A9%D8%A7%D8%B1%D8%AA_%D8%B4%D9%86%D8%A7%D8%B3%D8%A7%DB%8C%DB%8C_%D9%85%D9%84%DB%8C#%D8%AD%D8%B3%D8%A7%D8%A8_%DA%A9%D8%B1%D8%AF%D9%86_%DA%A9%D8%AF_%DA%A9%D9%86%D8%AA%D8%B1%D9%84)

```php
return [
    'code' => 'required|national_code'
];
```
--OR--
```php
 $validatedData = $request->validate([
    'code' => 'national_code',
]);
```

- `iban`

A rule for validating IBAN (International Bank Account Number) known in Iran as Sheba. [(How calculated)](https://fa.wikipedia.org/wiki/%D8%A7%D9%84%DA%AF%D9%88%D8%B1%DB%8C%D8%AA%D9%85_%DA%A9%D8%AF_%D8%B4%D8%A8%D8%A7#%D8%A7%D9%84%DA%AF%D9%88%D8%B1%DB%8C%D8%AA%D9%85_%DA%A9%D8%AF_%D8%B4%D8%A8%D8%A7)
```php
return [
    'account' => 'iban'
];
```
Add `false` optional parameter after `iban`, If IBAN doesn't begin with `IR`, so the validator will add `IR` as default to the account number:
```php
return [
    'account' => 'iban:false'
];
```
If you want to validate non Iranian IBAN, add the 2 letters of country code after `false` optional parameter:
```php
return [
    'account' => 'iban:false,DE'
];
```
 - `debit_card`

A rule for validating Iranian debit cards. [(How calculated)](http://www.aliarash.com/article/creditcart/credit-debit-cart.htm)
```php
return [
    'code' => 'required|debit_card'
];
```
--OR--
```php
 $validatedData = $request->validate([
    'code' => 'debit_card',
]);
```
You can add an optional parameter if you want to validate a card from a specific bank:
```php
return [
    'code' => 'required|debit_card:bmi'
];
```
List of the bank codes:

 - bmi (بانک ملی)
 - banksepah (بانک سپه)
 - edbi (بانک توصعه صادرات)
 - bim (بانک صنعت و معدن)
 - bki (بانک کشاورزی)
 - bank-maskan (بانک مسکن)
 - postbank (پست بانک ایران)
 - ttbank (بانک توسعه تعاون)
 - enbank (بانک اقتصاد نوین)
 - parsian-bank (بانک پارسیان)
 - bpi (بانک پاسارگاد)
 - karafarinbank (بانک کارآفرین)
 - sb24 (بانک سامان)
 - sinabank (بانک سینا)
 - sbank (بانک سرمایه)
 - shahr-bank (بانک شهر)
 - bank-day (بانک دی)
 - bsi (بانک صادرات)
 - bankmellat (بانک ملت)
 - tejaratbank (بانک تجارت)
 - refah-bank (بانک رفاه)
 - ansarbank (بانک انصار)
 - mebank (بانک مهر اقتصاد)

 ## Contribute ##
 Contributions to the package are always welcome!
 
 - Report any idea, bugs or issues you find on the [issue tracker](https://github.com/majidalavizadeh/ir-validator/issues).
 - You can grab the source code at the package's [Git repository](https://github.com/majidalavizadeh/ir-validator).
 
 ## License ##
 All contents of this package are licensed under the [MIT license](https://github.com/majidalavizadeh/ir-validator/blob/master/LICENSE.md).

