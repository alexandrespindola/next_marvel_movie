<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "Today is the day!",
        $days === 1 => "Tomorrow!",
        $days < 7   => "It's already out!",
        $days < 30  => "It's coming soon!",
        default     => "$days days left until the premiere"
    };
}
