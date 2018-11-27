<?php

namespace DmitryIvanov\DarkSkyApi\Weather;

use DmitryIvanov\DarkSkyApi\Contracts\Weather\Headers as HeadersContract;

class Headers implements HeadersContract
{
    /**
     * The headers.
     *
     * @var array
     */
    protected $headers;

    /**
     * Create a new instance of the weather headers.
     *
     * @param  array  $headers
     * @return void
     */
    public function __construct(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * Get all headers.
     *
     * @return array
     */
    public function all()
    {
        return $this->headers;
    }

    /**
     * The number of API requests made by the given API key for today.
     *
     * @return array
     */
    public function apiCalls()
    {
        return \DmitryIvanov\DarkSkyApi\array_get($this->headers, 'X-Forecast-API-Calls', []);
    }

    /**
     * The conservative value for data caching purposes, based on the data present in the response body.
     *
     * @return array
     */
    public function cacheControl()
    {
        return \DmitryIvanov\DarkSkyApi\array_get($this->headers, 'Cache-Control', []);
    }

    /**
     * The server-side response time of the request.
     *
     * @return array
     */
    public function responseTime()
    {
        return \DmitryIvanov\DarkSkyApi\array_get($this->headers, 'X-Response-Time', []);
    }
}