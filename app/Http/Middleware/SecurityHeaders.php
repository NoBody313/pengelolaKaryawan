<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    private $unwantedHeaders = ['X-Powered-By', 'server', 'Server'];

    /**
     * @param $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // if (!app()->environment('local')) {
        //     $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');
        //     $response->headers->set('X-XSS-Protection', '1; mode=block');
        //     $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');

        $recaptchaNonce = base64_encode(openssl_random_pseudo_bytes(16));

        $response->headers->set('Content-Security-Policy', "default-src 'self' https://fatihtest.my.id; script-src 'self' *.cloudflare.com https://www.google.com/recaptcha/ https://www.gstatic.com/recaptcha/ https://cdn.tailwindcss.com https://code.jquery.com; style-src 'self' *.cloudflare.com 'unsafe-inline' fonts.googleapis.com; img-src 'self' https://fatihtest.my.id; font-src 'self' data: fonts.gstatic.com; connect-src 'self' https://fatihtest.my.id; media-src 'self'; frame-src 'self' https://www.google.com/recaptcha/, https://recaptcha.google.com/recaptcha/ ; object-src 'none'; base-uri 'self'; ");

        //     $response->headers->set('Expect-CT', 'enforce, max-age=30');
        //     $response->headers->set('Permissions-Policy', 'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()');
        //     $response->headers->set('Access-Control-Allow-Origin', 'https://fatihtest.my.id');
        //     $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT,PATCH,DELETE,OPTIONS');
        //     $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With, X-CSRF-Token, hCaptcha-Token');
        //     $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        //     $response->headers->set('X-Content-Type-Options', 'nosniff');
        //     $response->headers->set('X-Robots-Tag', 'noindex, nofollow');

        //     $this->removeUnwantedHeaders($this->unwantedHeaders);
        // }

        return $response;
    }

    /**
     * @param $headers
     */
    private function removeUnwantedHeaders($headers): void
    {
        foreach ($headers as $header) {
            header_remove($header);
        }
    }
}
