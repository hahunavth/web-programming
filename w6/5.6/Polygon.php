<?php
require_once "Shape.php";

abstract class Polygon extends Shape {
    abstract function getNumberOfSlides();
}