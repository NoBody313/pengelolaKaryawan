<?php

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class ContentPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        // Add default-src directive
        $this->addDirective(Directive::DEFAULT, [
            Keyword::SELF,
            'https://fatihtest.my.id',
        ]);

        // Add script-src directive
        $this->addDirective(Directive::SCRIPT, [
            Keyword::SELF,
            '*.cloudflare.com',
            'https://www.google.com/recaptcha/',
            'https://www.gstatic.com/recaptcha/',
            'https://cdn.tailwindcss.com',
            'https://code.jquery.com',
        ]);

        // Add style-src directive
        $this->addDirective(Directive::STYLE, [
            Keyword::SELF,
            '*.cloudflare.com',
            Keyword::UNSAFE_INLINE,
            'fonts.googleapis.com',
        ]);

        // Add img-src directive
        $this->addDirective(Directive::IMG, [
            Keyword::SELF,
            'https://fatihtest.my.id',
        ]);

        // Add font-src directive
        $this->addDirective(Directive::FONT, [
            Keyword::SELF,
            'data:',
            'fonts.gstatic.com',
        ]);

        // Add connect-src directive
        $this->addDirective(Directive::CONNECT, [
            Keyword::SELF,
            'https://fatihtest.my.id',
        ]);

        // Add media-src directive
        $this->addDirective(Directive::MEDIA, [
            Keyword::SELF,
        ]);

        // Add frame-src directive
        $this->addDirective(Directive::FRAME, [
            Keyword::SELF,
            'https://www.google.com/recaptcha/',
            'https://recaptcha.google.com/recaptcha/',
        ]);

        // Add object-src directive
        $this->addDirective(Directive::OBJECT, [
            Keyword::NONE,
        ]);

        // Add base-uri directive
        $this->addDirective(Directive::BASE, [
            Keyword::SELF,
        ]);
    }
}
