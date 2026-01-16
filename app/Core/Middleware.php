<?php 
declare(strict_types=1);
namespace App\Core;

class Middleware{


    
    /**
     * Require multiple session keys to be present.
     * If missing, redirect to login.
     */
    public function requireSession(array $keys, string $redirectTo = "")
    {
        foreach ($keys as $key) {
            if (empty($_SESSION[$key])) {
                header("Location: ".BURL.$redirectTo);
                exit;
            }
        }
    }

    /**
     * Optional: require the user to be *logged OUT*
     * (Useful for login/register pages)
     */
    public function requireGuest(array $keys, string $redirectTo = "")
    {
       foreach ($keys as $key) {
           if (!empty($_SESSION[$key])) {
               header("Location: " . BURL."$redirectTo");
               exit;
           }
       }
    }

}
