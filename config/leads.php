<?php

return [
    /*
    | Where new-lead notification emails are sent. Set LEAD_NOTIFY_TO in .env.
    | Falls back to MAIL_FROM_ADDRESS if left empty.
    */
    'notification_to' => env('LEAD_NOTIFY_TO'),
];
