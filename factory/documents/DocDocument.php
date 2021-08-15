<?php

namespace documents;

/**
 * Class DocDocument
 */
class DocDocument implements Document
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
        return 'docx';
    }
}