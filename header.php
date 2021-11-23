#SECURITY HEADERS#

header('Permissions-Policy: geolocation=()');
header('Content-Security-Policy: img-src * data:; img-src https: data:');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload env=HTTPS');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: same-origin');
header('Expect-CT: max-age=604800, enforce');
header('Set-Cookie: ^(.*)$ $1;HttpOnly;Secure');
