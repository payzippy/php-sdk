<?php
require_once("Config.php");
require_once("Constants.php");

class Utils
{
    public static function flatten_array($data)
    {

        if (empty($data)) {
            return "|";
        }

        $str = "";
        ksort($data);

        foreach ($data as $key => $value) {
            if ($key === Constants::PARAMETER_HASH) {
                continue;
            } elseif (is_array($value)) {
                $str .= self::flatten_array($value);
//                TODO: remove nulls and empty
            } elseif (is_null($value)) {
                $str .= "null" . "|";
            } elseif (is_bool($value)) {
                $bool_str = $value ? "true" : "false";
                $str .= $bool_str . "|";
            } else {
                $str .= $value . "|";
            }
        }

        return $str;
    }

    public static function generate_hash($params)
    {
        $hash_method = $params[Constants::PARAMETER_HASH_METHOD];

        $str = self::flatten_array($params);
        $str .= Config::SECRET_KEY;
        return hash(strtolower($hash_method), $str);
    }

    public static function is_valid_parameter($value, $max_length = 0)
    {
        if (empty($value)) {
            return FALSE;
        } elseif ($max_length > 0 && strlen($value) > $max_length) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public static function params_filter($params)
    {
        $return_params = array();
        foreach ($params as $key => $value) {
            if ($value != "") {
                $return_params[$key] = $value;
            }
        }
        return $return_params;
    }

}



