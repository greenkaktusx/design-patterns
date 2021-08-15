<?php

namespace services;

use documents\Document;
use documents\ExcelDocument;

/**
 * Class ExcelDocumentService
 */
class ExcelDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new ExcelDocument();
    }
}