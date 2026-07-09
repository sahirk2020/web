<?php
session_start();

function cleanInput($value)
{
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

if (!isset($_COOKIE['user_id'])) {

    $user_id = uniqid('dt_', true);

    setcookie(
        'user_id',
        $user_id,
        time() + (90 * 24 * 60 * 60),
        "/",
        "",
        isset($_SERVER['HTTPS']),
        true
    );
} else {

    $user_id = $_COOKIE['user_id'];
}

$_SESSION['user_id'] = $user_id;

$tracking_fields = [

    'utm_source',
    'utm_medium',
    'utm_campaign_name',
    'utm_campaign_id',
    'utm_campaign_city',
    'utm_campaign_state',
    'utm_term',
    'utm_adid',
    'utm_device',
    'utm_matchtype',
    'utm_location',
    'gclid'

];

foreach ($tracking_fields as $field) {

    if (!empty($_GET[$field])) {

        $value = cleanInput($_GET[$field]);

        /*
        |--------------------------------------------------------------------------
        | Save in Cookie (90 Days)
        |--------------------------------------------------------------------------
        */

        setcookie(
            $field,
            $value,
            time() + (90 * 24 * 60 * 60),
            "/",
            "",
            isset($_SERVER['HTTPS']),
            true
        );

        /*
        |--------------------------------------------------------------------------
        | Save in Session
        |--------------------------------------------------------------------------
        */

        $_SESSION[$field] = $value;
    }
}

foreach ($tracking_fields as $field) {

    if (empty($_SESSION[$field]) && !empty($_COOKIE[$field])) {

        $_SESSION[$field] = $_COOKIE[$field];
    }
}

$source         = $_SESSION['utm_source'] ?? 'Organic Lead';
$capaignname    = $_SESSION['utm_campaign_name'] ?? 'Search';
$capaignid      = $_SESSION['utm_campaign_id'] ?? 'Website';

$capaigncity    = $_SESSION['utm_campaign_city'] ?? 'Pune';
$capaignstate   = $_SESSION['utm_campaign_state'] ?? 'Maharashtra';

$utm_medium     = $_SESSION['utm_medium'] ?? '';
$utm_term       = $_SESSION['utm_term'] ?? '';
$utm_adid       = $_SESSION['utm_adid'] ?? '';
$utm_device     = $_SESSION['utm_device'] ?? '';
$utm_matchtype  = $_SESSION['utm_matchtype'] ?? '';
$utm_location   = $_SESSION['utm_location'] ?? '';
$gclid          = $_SESSION['gclid'] ?? '';

$URLinfo = "
<input type='hidden' id='user_id' name='user_id' value='$user_id' />
<input type='hidden' id='utm_source' name='utm_source' value='$source' />
<input type='hidden' id='utm_medium' name='utm_medium' value='$utm_medium' />
<input type='hidden' id='utm_campaign_name' name='utm_campaign_name' value='$capaignname' />
<input type='hidden' id='utm_campaign_id' name='utm_campaign_id' value='$capaignid' />
<input type='hidden' id='utm_campaign_city' name='utm_campaign_city' value='$capaigncity' />
<input type='hidden' id='utm_campaign_state' name='utm_campaign_state' value='$capaignstate' />
<input type='hidden' id='utm_term' name='utm_term' value='$utm_term' />
<input type='hidden' id='utm_adid' name='utm_adid' value='$utm_adid' />
<input type='hidden' id='utm_device' name='utm_device' value='$utm_device' />
<input type='hidden' id='utm_matchtype' name='utm_matchtype' value='$utm_matchtype' />
<input type='hidden' id='utm_location' name='utm_location' value='$utm_location' />
<input type='hidden' id='gclid' name='gclid' value='$gclid' />
";
?>