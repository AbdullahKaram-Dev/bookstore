<?php

namespace Core;

class Route
{
    private $routing_table = [];

    public function get(string $url, string $controller_action,string $middleware = null)
    {
        $controller_action_arr = explode("@", $controller_action);
        $url_regex = "/^" . str_replace("/", "\/", $url) . "$/";

        $this->routing_table[$url_regex] = [
            'method' => 'GET',
            'controller' => $controller_action_arr[0],
            'action' => $controller_action_arr[1],
            'middleware' => $middleware,
        ];
    }

    public function post(string $url, string $controller_action,string $middleware = null)
    {
        $controller_action_arr = explode("@", $controller_action);
        $url_regex = "/^" . str_replace("/", "\/", $url) . "$/";

        $this->routing_table[$url_regex] = [
            'method' => 'POST',
            'controller' => $controller_action_arr[0],
            'action' => $controller_action_arr[1],
            'middleware' => $middleware,
        ];
    }

    public function getRoutingTable()
    {
        return $this->routing_table;
    }
}