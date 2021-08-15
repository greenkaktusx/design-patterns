<?php

namespace services;

use documents\Document;
use documents\PdfDocument;

/**
 * Class PdfDocumentService
 */
class PdfDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new PdfDocument();
    }
}