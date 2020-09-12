<?php

namespace Modules\Base\Services;

class CurlService
{

    /**
     * Make an http request using curl.
     *
     * @param string $route
     * @param string $method
     * @param array $header
     * @param array $body
     *
     * @return array
     */
    private static function curl($route, $method, $header = [], $body = [])
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $route,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => http_build_query($body),
            CURLOPT_HTTPHEADER => $header,
        ));

        $response = json_decode(curl_exec($curl));
        $code = curl_getinfo($curl)['http_code'];

        curl_close($curl);

        return [
            'response' => $response,
            'code' => $code
        ];
    }

    /**
     * make a get request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function get($route)
    {
        return self::curl($route, 'GET');
    }

    /**
     * make a put request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function put($route, $body = [], $header = [])
    {
        return self::curl($route, 'PUT', $header, $body);
    }

    /**
     * make a post request using curl.
     *
     * @param string $route
     *
     * @return array
     */
    public static function post($route, $body = [], $header = [])
    {
        return self::curl($route, 'POST', $header, $body);
    }
}
