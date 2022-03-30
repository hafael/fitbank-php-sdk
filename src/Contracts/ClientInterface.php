<?php

namespace Hafael\Fitbank\Contracts;

/**
 * ClientInterface
 */
interface ClientInterface
{
    /**
     * @param RouteInterface $route
     * @param array $params
     * @return string
     */
    public function get(RouteInterface $route, $params = [], $headers = []);

    /**
     * @param RouteInterface $route
     * @param $data
     * @return string
     */
    public function post(RouteInterface $route, $data, $headers = []);

    /**
     * @param RouteInterface $route
     * @param $data
     * @return string
     */
    public function put(RouteInterface $route, $data, $headers = []);

    /**
     * @param RouteInterface $route
     * @param $data
     * @return string
     */
    public function patch(RouteInterface $route, $data, $headers = []);

    /**
     * @param RouteInterface $route
     * @return string
     */
    public function delete(RouteInterface $route, $headers = []);

    /**
     * @return int
     */
    public function getPartnerId();

    /**
     * @return int
     */
    public function getBusinessUnitId();

    /**
     * @return int
     */
    public function getMktPlaceId();

    /**
     * @return string
     */
    public function getTaxNumber();
}