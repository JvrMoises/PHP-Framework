<?php

function redirect($page) {
    header('location: ' . PATH_URL . $page);
}