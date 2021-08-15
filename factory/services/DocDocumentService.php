<?php

namespace services;

use documents\Document;
use documents\DocDocument;

/**
 * Class DocDocumentService
 */
class DocDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new DocDocument();
    }
}