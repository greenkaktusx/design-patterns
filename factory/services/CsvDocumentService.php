<?php

namespace services;

use documents\Document;
use documents\CsvDocument;

/**
 * Class CsvDocumentService
 */
class CsvDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new CsvDocument();
    }
}