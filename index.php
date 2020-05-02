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

    public static function input(Array $args = [])
    {
        $res = '<input';
        foreach ($args as $key => $arg) {
            $res .= " " . $key . "='" . $arg . "'";
        }
        return $res . " />";
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

echo Form::open();

echo Form::submit();

echo Form::close();