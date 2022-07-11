<?php
    define('MODE', 'sandbox');

    if(MODE == 'sandbox') {
        // define('URL', 'https://api-m.sandbox.paypal.com/');
        define('CLIENTID', 'AXgHwHQU3ItuXtALYYw8UvrHjHqY-STmCvzkvKiGOJmqDHgIze9gJgD52rtQ1OH748cHFpMdAwx-KSR7');
        define('SECRETKEY', 'EKDdF4lIbIJIhUZn79ARvOwTjYg7v1fJzlw4jveuLyCR4gnTO69kHhslEZ_DSy_qfHu0nfhyXatgeHzj');
    } else {
        define('URL', 'https://api-m.paypal.com/');
        define('CLIENTID', 'ARGQV_s5LpEy_OHe7ijcz4HMvfSN7HvVCyVDX7MacLbGnK4ElO-uL6r2TV1cCrc38FmAGy-IUYdKDWGF');
        define('SECRETKEY', 'EKW8PY5F7fWdh93RaCmU0RFIE-S7W-i94ZCdHApWzHE6l3BcMAfNCdH8gLdihIC0PCQnRQpihfAN7qnC');
    }
?>