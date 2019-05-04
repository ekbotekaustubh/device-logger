<?php

/**
 * Class Auth
 */
class Session
{
    /**
     * Session start
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Check if user is logged in, otherwise redirect user to login.
     *
     * @param string $url
     * @return bool
     */
    public function auth(string $url = '')
    {
        // Exclude route from checking session.
        if (in_array($url, ['index/login', 'index/register']))
        {
            return false;
        }


        if (!isset($_SESSION['userName'])) {
            header('location: /index/login');
            exit;
        }
    }
}