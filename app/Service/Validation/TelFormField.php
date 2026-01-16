<?php
declare(strict_types=1);

namespace App\Service\Validation;

class TelFormField
{
    public function NotBlank(string $input, string $fieldName = 'phone'):?string
    {
        if (trim($input) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }




    public function PhoneRegex(string $input, string $fieldName = 'phone'): ?string
    {
        $input = trim($input);

        if (!preg_match('/^\+?\d{8,15}$/', $input)) {
            return "Invalid phone number";
        }

        return null;
    }
}
