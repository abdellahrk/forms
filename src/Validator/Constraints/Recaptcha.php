<?php

namespace Bolt\BoltForms\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Recaptcha extends Constraint
{
    /** @var string */
    public $incompleteMessage = 'Please complete the CAPTCHA challenge.';

    /** @var string */
    public $message = 'The CAPTCHA challenge failed with "{{ error }}". Please try again or contact the site owner.';

    /** @var string */
    public $secretKey;

    /** @var string */
    public $siteKey;

    public function __construct($siteKey, $secretKey)
    {
        $this->siteKey = $siteKey;
        $this->secretKey = $secretKey;
    }
}
