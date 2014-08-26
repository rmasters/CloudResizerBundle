<?php

namespace CrowdReactive\CloudResizerBundle\CloudResizer\Provider;

class ResrcIt implements ProviderInterface
{
    public function build(array $parameters, $url)
    {
        // Parameters are expressed in the URL as key=value
        $query = array_map(function($key, $value) {
            return "$key=$value";
        }, array_keys($parameters), $parameters);

        // Build the URI
        return sprintf("//app.resrc.it/%s/%s",
            implode("/", $query),
            $url
        );
    }
}