<?php
declare(strict_types=1);

namespace App\Service\Validation;

class PasswordFormField
{
    public function NotBlank(string $input, string $fieldName = 'field'):?string
    {
        if (trim($input) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }




    public function PasswordRegex(string $input, string $fieldName = 'field'): ?string
    {
        $input = trim($input);

        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,16}$/", $input)) {
            return "{$fieldName} must be 6-16 characters, include at least one uppercase letter, one lowercase letter, one number, and one special character (!@#$%^&*)";
        }

        return null;
    }


    public function minLength(string $input, string $fieldName = 'password',int $min = 6):?string 
    {
        if (mb_strlen(trim($input)) < $min) {
            return "{$fieldName} must be at least {$min} characters long";
        }

        return null;
    }



    public function maxLength(string $input, string $fieldName = 'password',int $max = 16):?string
    {

    	if (mb_strlen(trim($input)) > $max) {
    	    return "{$fieldName} must not be greater than {$min} characters long";
    	}

    	return null;
    }
}
