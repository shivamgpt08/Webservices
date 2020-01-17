<?php

namespace Shivam\Webservices;

use Exception;
use Illuminate\Support\Arr;
/**
 *
 * @author Shivam Gupta
 */
trait HandleResponse {

    protected $__data;

    /**
     * @param $message
     */
    function success($message) {
        $this->setData("type", "success");
        $this->setData("message", $message);
    }

    /**
     * @param $message
     * @param bool $exit
     * @throws Exception
     */
    function error($message, $exit = true) {
        if ($exit) {
            throw $this->exception($message);
        }
        $this->setData("message", $message);
        $this->setData("type", "error");
    }

    /**
     * @param $message
     * @return Exception
     */
    function exception($message) {
        return new Exception($message);
    }

    /**
     * @param $key
     * @param null $value
     */
    function setData($key, $value = null) {
        if (func_num_args() < 2) {
            $this->__data = $key;
        } else {
            Arr::set($this->__data, $key, $value);
        }
    }

    /**
     * @param bool $key
     * @return \Illuminate\Support\Collection|mixed
     */
    function getData($key = false) {
        if (!$key) {
            return $this->__data;
        } else {
            return Arr::set($this->__data, $key);
        }
    }

}
