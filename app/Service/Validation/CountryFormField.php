<?php
declare(strict_types=1);

namespace App\Service\Validation;

class CountryFormField
{
    public function NotBlank(string $input, string $fieldName = 'field'):?string
    {
        if (trim($input) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }
}
