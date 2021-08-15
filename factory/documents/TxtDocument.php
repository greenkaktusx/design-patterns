<?php

namespace documents;

/**
 * Class TxtDocument
 */
class TxtDocument implements Document
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
        return 'txt';
    }
}