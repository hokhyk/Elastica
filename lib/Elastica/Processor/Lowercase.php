<?php

namespace Elastica\Processor;

/**
 * Elastica Lowercase Processor.
 *
 * @author Federico Panini <fpanini@gmail.com>
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/lowercase-processor.html
 */
class Lowercase extends AbstractProcessor
{
    /**
     * Lowercase constructor.
     *
     * @param string $field
     */
    public function __construct(string $field)
    {
        $this->setField($field);
    }

    /**
     * Set field.
     *
     * @param string $field
     *
     * @return $this
     */
    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }
}
