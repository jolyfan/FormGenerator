<?php

class Form
{
    private static function typeChecker(Array $args, $result)
    {
        foreach ($args as $key => $arg) {
            if ($key == 'type') {
                return "ERROR: 'TYPE' already exists";
            }
            $result .= " " . $key . "='" . $arg . "'";
        }
        return $result . " />";
    }

    public static function input(Array $args = [], $cookie_value = null)
    {
        $res = '<input';
        foreach ($args as $key => $arg) {
            $res .= " " . $key . "='" . $arg . "'";
        }
        return $res."/>";
    }

    public static function submit(Array $args = [])
    {
        $res = "<input type='submit'";
        return self::typeChecker($args, $res);
    }

    public static function password(Array $args = [])
    {
        $res = "<input type='password'";
        return self::typeChecker($args, $res);
    }

    public static function textarea(Array $args = [])
    {
        $res = "<textarea";
        foreach ($args as $key => $arg) {
            $res .= " " . $key . "='" . $arg . "'";
        }
        return $res . "></textarea>";
    }

    public static function open(Array $args = [])
    {
        $res = "<form";
        foreach ($args as $key => $arg) {
            $res .= " " . $key . "='" . $arg . "'";
        }

        return $res . ">";
    }

    public static function close()
    {
        return "</form>";
    }

}

class SmartForm extends Form
{
    public static function input(Array $args = [], $cookie_value = null)
    {
        $res = '<input';

        foreach ($args as $key => $arg) {
            $res .= " " . $key . "='" . $arg . "'";
            if ($key = "name")
            {
                $cookie_value = $_POST[$arg];

                if ($cookie_value != null)
                {
                    $res .= " value=".$_POST[$arg];
                }
            }
        }
        return $res.">";
    }
}

echo SmartForm::open(['method' => 'POST']);
    echo SmartForm::input(['name' => 'input_name']);
    echo SmartForm::submit(['value' => 'Подтвердить']);
echo SmartForm::close();