<?php

namespace documents;

/**
 * Class CsvDocument
 */
class CsvDocument implements Document
{
    /**
     * @inheritDoc
     */
    public function generate(): void
    {
        // TODO: Implement generateFile() method.
    }

    /**
     * @inheritDoc
     */
    public function getFileExtension(): string
    {
        return 'csv';
    }
}