<?php
declare(strict_types=1);

namespace App\Service\Validation;

class EmailFormField
{
    public function NotBlank(string $input, string $fieldName = 'email'):?string
    {
        if (trim($input) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }




    public function EmailRegex(string $input, string $fieldName = 'field'):?string
    {
    	$input= trim($input);
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $input)) {
            return "Invalid email address";
        }

        return null;
    }
}
