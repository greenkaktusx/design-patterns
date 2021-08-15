<?php

namespace services;

use documents\Document;

/**
 * Class DocumentService
 */
abstract class DocumentService
{
    /**
     * Create new document.
     *
     * @return Document
     */
    abstract public function createDocument(): Document;

    /**
     * Send document to client.
     *
     * @return bool
     */
    public function sendDocumentToClient(): bool
    {
        $document = $this->createDocument();
        $document->generate();

        echo 'Send file FileName.' . $document->getFileExtension();

        return true;
    }
}