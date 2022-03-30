<?php

namespace Hafael\Fitbank\Handler;

use Hafael\Fitbank\Exceptions\ClientException;

class Curl
{
    /**
     * @var string
     */
    protected $resource;

    /**
     * @var array
     */
    private $headers = [];

    /**
     * @var Response
     */
    private $response;

    /**
     * @method init
     */
    public function __construct()
    {
        $this->resource = curl_init();

        curl_setopt($this->resource, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->resource, CURLOPT_SSL_VERIFYPEER, false);

        $this->response = new Response();
    }

    /**
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        curl_setopt($this->resource, CURLOPT_URL, $url);
    }

    /**
     * @param string $method
     * @return void
     */
    public function setMethod($method)
    {
        curl_setopt($this->resource, CURLOPT_CUSTOMREQUEST, $method);
    }

    /**
     * @param string $username
     * @param string $password
     * @return void
     */
    public function setBasicAuthorization($username, $password)
    {
        curl_setopt($this->resource, CURLOPT_USERPWD, $username . ":" . $password);
    }

    /**
     * @param string $opt
     * @param string $value
     * @return void
     */
    public function setOption($opt, $value)
    {
        curl_setopt($this->resource, $opt, $value);
    }

    /**
     * @param array $data
     * @return void
     */
    public function setBody($data)
    {
        $body = $this->serialize($data);
        //curl_setopt($this->resource, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->resource, CURLOPT_POST, true);
        curl_setopt($this->resource, CURLOPT_POSTFIELDS, $body);
    }

    /**
     * Serialize array into JSON Object
     * 
     * @param $data
     * @return string
     * @throws ClientException
     */
    public function serialize($data)
    {
        if(! is_array($data)) {
            throw new ClientException("Array expected.");
        }
        return json_encode($data);
    }

    /**
     * @param string @header
     * @return void
     */
    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    /**
     * @param string @header
     * @return void
     */
    public function addHeaders($headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    /**
     * @param array $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return void
     */
    private function buildHeaders()
    {
        curl_setopt(
            $this->resource, CURLOPT_HTTPHEADER, 
            $this->getHeaders()
        );
    }


    /**
     * @return resource
     */
    public function exec()
    {
        $this->buildHeaders();
        $data = curl_exec($this->resource);
        $info = curl_getinfo($this->resource);

        return array_merge(['body' => $data], $info);
    }

    /**
     * @method send
     * @return Response
     */
    public function send()
    {
        try {
            $return = $this->exec();
            $this->response->setStatusCode((int)$return['http_code'])
                 ->setContentType($return['content_type'])
                 ->setContent($return['body']);

        } catch(ClientException $ex) {
            $this->handlerException($ex);
        }

        return $this->response;
    }

    /**
     * @return void
     */
    public function handlerException(\Exception $ex)
    {
        $this->response->setStatusCode(500)
             ->setContent(
                 json_encode([
                    'error' => $ex->getMessage()
                 ])
             );
    }

    /**
     * @destruct method
     */
    public function __destruct()
    {
        curl_close($this->resource);
    }
}