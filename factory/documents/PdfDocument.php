<?php

namespace documents;

/**
 * Class PdfDocument
 */
class PdfDocument implements Document
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
        return 'pdf';
    }
}