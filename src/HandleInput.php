<?php

namespace Shivam\Webservices;

/**
 *
 * @author Shivam Gupta
 */
trait HandleInput {

    function post($key, $default = null) {
        return request()->post($key, $default);
    }

    function get($key, $default = null) {
        return request()->query($key, $default);
    }

    function input($key, $default = null) {
        return request()->input($key, $default);
    }

    function file($name) {
        return request()->file($name);
    }

    function files($name) {
        return collect($this->file($name));
    }

}
