
                 

PHP SDK for Simplify Commerce
  What is it?
  ------------

  A PHP API to the Simplify Commerce payments platform.   If you have
  not already got an account sign up at https://www.simplify.com/commerce.


  Installation
  ------------

   Installation
  ------------

  Add the lib directory to your PHP include path to access the SDK from
  your application:

      composer require simplifycommerce/payment

      laravel config/app.php 
      insert line :  'aliases' => [..
                                    ..
                                    'simplifycommerce' => simplifycommerce\lib\Simplify::class

                                  ]

            



  Using the Laravel Package
  --------------

  Use the following script while using package in laravel project
  replace public and private key with your keys
    <?php

      use Lib\Simplify;
      use Lib\Simplify\Simplify_Payment;
      
      Simplify::$publicKey = 'YOUR_PUBLIC_KEY';
      Simplify::$privateKey = 'YOUR_PRIVATE_KEY';
      
      $obj = Simplify_Payment::findPayment('PAYMENT_ID');

      echo '<pre>';
      print_r($obj);
      echo '</pre';
      
    ?>

  For more examples see https://www.simplify.com/commerce/docs/sdk/php.

  Version
  -------

  This is version 1.6.0 of the SDK.  See CHANGES.txt for a list 
  of changes. For an up-to-date version check at 
  https://www.simplify.com/commerce/docs/sdk/php.

  Licensing
  ---------

  Please see LICENSE.txt for details.

  Documentation
  -------------

  API documentation is available in the doc directory in HTML.  For more
  detailed information on the API with examples visit the online
  documentation at https://www.simplify.com/commerce/docs/sdk/php.

  Support
  -------

  Please see https://www.simplify.com/commerce/docs/support for information.

  Copyright
  ---------

  Copyright (c) 2013 - 2018 MasterCard International Incorporated
  All rights reserved.

