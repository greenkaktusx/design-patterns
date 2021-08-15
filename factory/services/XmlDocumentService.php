<?php

namespace services;

use documents\Document;
use documents\XmlDocument;

/**
 * Class XmlDocumentService
 */
class XmlDocumentService extends DocumentService
{
    /**
     * @inheritDoc
     */
    public function createDocument(): Document
    {
        return new XmlDocument();
    }
}