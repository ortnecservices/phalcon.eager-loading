<?php namespace Sb\Framework\Mvc\Model\EagerLoading;

use Phalcon\Mvc\Model\Query\Builder;

/**
 * Class QueryBuilder
 * @package Sb\Framework\Mvc\Model\EagerLoading
 */
final class QueryBuilder extends Builder {
	const E_NOT_ALLOWED_METHOD_CALL = 'When eager loading relations queries must return full entities';

    /**
     * @param mixed $distinct
     *
     * @return Builder|void
     */
	public function distinct($distinct) {
		throw new \LogicException(static::E_NOT_ALLOWED_METHOD_CALL);
	}

    /**
     * @param mixed $columns
     *
     * @return Builder|void
     */
	public function columns($columns) {
		throw new \LogicException(static::E_NOT_ALLOWED_METHOD_CALL);
	}
}
