<?php
if (!function_exists('locale')) {
    function locale()
    {
        return app()->getlocale();
    }
}
