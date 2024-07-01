<?php

namespace App\Policies;

use App\Models\PegawaiData;
use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class ContentPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addDirective(Directive::SCRIPT, [
            'https://www.google.com/recaptcha/',
            ' https://www.gstatic.com/recaptcha/'
        ]);

        $this->addDirective(Directive::FRAME, [
            'https://www.google.com/recaptcha/',
            'https://recaptcha.google.com/recaptcha/'
        ]);
    }
}
