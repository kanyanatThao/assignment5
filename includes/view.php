<?php

function renderView($templates, array $data = []) {
    extract($data);
    include TEMPLATES_DIR . '/' . $templates . '.php';
}