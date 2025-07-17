<?php

abstract class route_switch {
    private $routes = array(
        "GET" => array(
            "home" => "pages/home.html@public",
            "contact" => "pages/contact.html@public",
            "about" => "pages/about.html@public",
            "public" => "public/index.php@public"
        ),
        "POST" => array(),
        "PUT" => array(),
        "DELETE" => array(),
    );

    public function getRoutes() {
        return $this->routes;
    }
}