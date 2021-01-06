<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/laravel-push-f5e41-ce4b36b57777.json');
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://laravel-push-f5e41-default-rtdb.firebaseio.com')
      ->create();
      
   $database = $firebase->getDatabase();
?>
