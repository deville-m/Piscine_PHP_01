#!/usr/bin/php
<?PHP
    if ($argc != 2)
        exit("Incorrect Parameters\n");
    function ft_output($item)
    {
        if (!is_numeric($item[0]) || !is_numeric($item[2]))
            exit("Syntax Error\n");
        if ($item[1] == "+")
            echo ($item[0] + $item[2])."\n";
        else if ($item[1] == "-")
            echo ($item[0] - $item[2])."\n";
        else if ($item[1] == "*")
            echo ($item[0] * $item[2])."\n";
        else if ($item[1] == "/" && $item[2] != 0)
            echo ($item[0] / $item[2])."\n";
        else if ($item[1] == "%" && $item[2] != 0)
            echo ($item[0] % $item[2])."\n";
        else
            exit("Syntax Error\n");
    }
    $item = preg_split("#[ \t]|([\+\-\*\/\%])#", $argv[1], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
    $new = array();
    $max = count($item);
    for ($i = 0; $i < $max; $i++)
    {
        if ($item[$i] === "-" && $i + 1 < $max && is_numeric($item[$i + 1]))
        {
            $new[] = $item[$i].$item[$i + 1];
            $i++;
        }
        else
            $new[] = $item[$i];
    }
    $tmp = $new;
    if (count($new) == 2 && is_numeric($new[0]) && is_numeric($new[1]) && $new[0] <= 0 && $new[1] <= 0)
    {
        $new[1] = "+";
        $new[2] = $tmp[1];
    }
    if (count($new) != 3)
        exit("Syntax Error\n");
    ft_output($new);
    return ;
?>