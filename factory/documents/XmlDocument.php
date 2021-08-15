<?php

namespace documents;

/**
 * Class XmlDocument
 */
class XmlDocument implements Document
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
        return 'xml';
    }
}