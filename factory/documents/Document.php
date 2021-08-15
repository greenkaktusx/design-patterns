<?php

namespace documents;

/**
 * Class Document
 */
interface Document
{
    /**
     * Generate file.
     *
     * @return void
     */
    public function generate(): void;

    /**
     * Get file extension.
     *
     * @return string
     */
    public function getFileExtension(): string;
}
