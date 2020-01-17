<?php

namespace Shivam\Webservices;

/**
 *
 * @author Shivam Gupta
 */
trait Webservice {

    use HandleRequest;
    use HandleInput;
    use HandleResponse;

    static function routeAction($name) {
        return __CLASS__ . "@$name";
    }

}
