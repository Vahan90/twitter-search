<?php

namespace Twitter\Search;

class Search extends \Twitter\Base
{
    public function search($value)
    {
        try {
            $url = "/search/tweets.json";
            $response = $this->callTwitterApi("get", $url, $value);
            return $response;
        } catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        } 
    }
}