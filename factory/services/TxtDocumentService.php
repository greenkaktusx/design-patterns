<?php

namespace services;

use documents\Document;
use documents\TxtDocument;

/**
 * Class TxtDocumentService
 */
class TxtDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new TxtDocument();
    }
}