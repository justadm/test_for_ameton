<?

if (!function_exists('pre')) {
    function pre($arr) {
        global $USER;
        if (!$USER->IsAdmin()) return;
        $args = func_get_args();
        if (count($args) > 1) {
            foreach ($args as $values) pre($values);
        } else {
            if (is_array($arr) || is_object($arr)) {
                echo "<pre>";  print_r($arr); echo "</pre>";
            } else {
                echo $arr . '<br>';
            }
        }
        return;
    }
}


