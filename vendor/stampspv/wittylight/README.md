# WittyLight

[![Latest Stable Version](https://poser.pugx.org/stampspv/wittylight/v/stable)](https://packagist.org/packages/stampspv/wittylight)


WittyLight is a Laravel 5 Package for Send E-mail form Wittylight Server by API

## Installation

Use the composer to install WittyMail.

```bash
composer require stampspv/wittylight
```

## Usage

First of all , you will insert config setting to .env of you project.
```env
WITTYLIGHT_TEST=true
WITTYLIGHT_TOKEN=xxxxxxxxxxxx
```
"xxxxxxx" is token of website security check form WittyLight Server, Don't forget to type commands ``` php artisan config:clear ``` after change .env


Next, You can use the sendmail method, but you will have to send the important data in this format.

```php
$data = [
    'title'     => 'Testing',
    'name'      => 'Wittylight',
    'form'      => 'no-reply@wittylight.com',
    'html'      => view('emails.neworder',['order'=>$order])->render(),
];
$mail = WittylightController::sendmail('suphavich.c@gmail.com',$data);
```
If sending email successfully , The API will return the success json like this

```
array:2 [▼
  "status" => true
  "message" => "success"
]
```
But failed , The API will return the json with false status and error message like this
```$xslt
array:2 [▼
  "status" => false
  "message" => "email to and form is required"
]
```
## WittyLog

WittyLog is Sending Message Logs system for maintenance project and notification to Wiitylight as developer when system are critical error.

Usage by
```php
WittylightController::logs('error','message',false);
```

You can use with Exception handler , example that

```php
try{
    $t->save();
}catch (\Exception $x){
    WittylightController::logs('error',$x->getMessage(),false);
}
```