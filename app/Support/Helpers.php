<?php

use BayAreaWebPro\SimpleCsv\SimpleCsv;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

if (! function_exists('routeIsParams')) {
    /**
     * Check if the actual route the same with those params.
     *
     * @return bool
     */
    function routeIsParams(string $route, array $params = [])
    {
        return Request::is(ltrim(route($route, $params, false), '/'));
    }
}

if (! function_exists('numberFormat')) {
    /**
     * Format the number with the passed value.
     *
     * @return string
     */
    function numberFormat(float $number)
    {
        return number_format($number, 0, ',', ' ');
    }
}

if (! function_exists('formatOctets')) {
    /**
     * Format octets to ko, mo, go, to.
     *
     * @return int|string
     */
    function formatOctets(int $size, int $precision = 2)
    {
        if ($size > 0) {
            $size     = (int) $size;
            $base     = log($size) / log(1000);
            $suffixes = [' octets', ' Ko', ' Mo', ' Go', ' To'];

            return round(pow(1000, $base - floor($base)), $precision).$suffixes[floor($base)];
        } else {
            return $size;
        }
    }
}

if (! function_exists('formatBytes')) {
    /**
     * Format bytes to kb, mb, gb, tb.
     *
     * @return int|string
     */
    function formatBytes(int $size, int $precision = 2)
    {
        if ($size > 0) {
            $size     = (int) $size;
            $base     = log($size) / log(1024);
            $suffixes = [' bytes', ' KB', ' MB', ' GB', ' TB'];

            return round(pow(1024, $base - floor($base)), $precision).$suffixes[floor($base)];
        } else {
            return $size;
        }
    }
}

if (! function_exists('recursive_array_replace')) {
    /**
     * recursive_array_replace.
     *
     * @param mixed $array
     *
     * @return array|string
     */
    function recursive_array_replace(string $find, string $replace, $array)
    {
        if (! is_array($array)) {
            return str_replace($find, $replace, $array);
        }

        $newArray = [];

        foreach ($array as $key => $value) {
            $newArray[$key] = recursive_array_replace($find, $replace, $value);
        }

        return $newArray;
    }
}

if (! function_exists('csvToSql')) {
    /**
     * To perform a quick db:seed
     * convert a CSV file to a string SQl.
     *
     * @return string
     */
    function csvToSql(string $tableName, string $path)
    {
        $collection = collect(SimpleCsv::import($path)->toArray());

        $keys   = '';
        $values = [];

        $dates = ['begin_at', 'end_at', 'validated_at'];

        $keysDates = [];

        $dateTimes = ['publish_at', 'redeem_by', 'ended_at', 'redemption_at', 'expire', 'unsuscribe_at', 'created_at', 'updated_at', 'relaunch_at', 'retrive_at', 'remove_at', 'answered_at', 'read_at'];

        $keysDateTimes = [];

        $collection->each(function ($line) use (&$keys, &$values, $dates, &$keysDates, $dateTimes, &$keysDateTimes) {
            if ('' === trim($keys)) {
                $restricted = [
                    'range',
                ];

                $autorised = [
                    '`range`',
                ];

                $keysLine = array_keys($line);

                foreach ($keysLine as $k => $v) {
                    if (in_array($v, $dates)) {
                        $keysDates[$v] = $k;
                    }

                    if (in_array($v, $dateTimes)) {
                        $keysDateTimes[$v] = $k;
                    }
                }

                $keys = str_replace($restricted, $autorised, '('.implode(',', $keysLine).')');
            }

            $step_at = Carbon::now();

            $lineValues = collect(array_values($line))
                ->transform(function ($lValue, $key) use ($step_at, $keysDates, $keysDateTimes) {
                    if (in_array($key, ['created_at', 'updated_at', 'deleted_at'])) {
                        $random = $step_at;
                    } elseif (in_array($key, ['relaunch_at'])) {
                        $random = $step_at->copy()->addMonths(1);
                    } else {
                        $random = (bool) random_int(0, 1) ? $step_at->copy()->subDays(random_int(0, 15)) : $step_at->copy()->subDays(random_int(0, 31));
                    }

                    if (
                        in_array($key, $keysDates) &&
                        'NULL' !== $lValue
                    ) {
                        return $random->toDateString();
                    } elseif (
                        in_array($key, $keysDateTimes) &&
                        'NULL' !== $lValue
                    ) {
                        return $random->toDateTimeString();
                    } else {
                        return $lValue;
                    }
                })
                ->toArray();

            $values[] = '("'.implode('","', $lineValues).'")';
        });

        $sql = 'INSERT INTO '.$tableName.' '.$keys.' VALUES '.str_replace('"NULL"', 'NULL', implode(',', $values));

        return $sql;
    }
}
