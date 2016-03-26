<?php

use Hercules\Helper;

class HercHelper_Tools extends Helper
{
    function __construct()
    {

    }

    /**
     * Debugging function that accepts infinite arguments and does a var_dump on each one.
     */
    function DebugIt()
    {
        $args = func_get_args();

        if( count( $args ) > 0 )
        {
            echo "\n<pre>";

            foreach ($args as $key => $val)
            {
                echo "\n\n========== Degugging Item " . ($key + 1) . " ==========\n\n";
                var_dump($val);
            }

            echo "\n\n========== END OF DEBUGGING ==========";
            echo "\n</pre>\n\n";
        }
    }
}