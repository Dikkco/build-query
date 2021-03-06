<?php

declare(strict_types=1);

namespace Dikkco\Buildable\Query;

use Dikkco\Buildable\Constant;
use Dikkco\Buildable\Exception\NotExistException;

trait SearchTrait
{
    /**
     * generate different params.
     *
     * @param string $key
     * @param int    $fuzzy
     *
     * @throws NotExistException
     *
     * @return string
     */
    public function getFuzzyParam(string $key, int $fuzzy): string
    {
        switch ($fuzzy) {
            case Constant::RIGHT:
                return $key.'%';

            case Constant::LEFT:
                return '%'.$key;

            case Constant::ALL:
                return '%'.$key.'%';

            default:
                throw new NotExistException('This value is not exist.', 1);
        }
    }

    /**
     * rename key for what you want.
     *
     * @param array|string $key
     *
     * @return array
     */
    public function renameKey($key)
    {
        $name = is_array($key) ? $key[1] : $key;
        $key = is_array($key) ? $key[0] : $key;

        return compact('name', 'key');
    }
}
