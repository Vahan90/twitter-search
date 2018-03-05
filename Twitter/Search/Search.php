<?php

namespace Twitter\Search;

class Search extends \Twitter\Base
{
    public $values;
    public function setValues($query, $count = 15)
    {
        $this->values = ['q' => $query, 'count' => $count];
    }

    public function search()
    {
        try {
            $url = "/search/tweets.json";
            $response = $this->callTwitterApi("get", $url, $this->values);
            return $response;
        } catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        } 
    }
}