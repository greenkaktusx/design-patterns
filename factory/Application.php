<?php

use services\{
    DocumentService,
    XmlDocumentService,
    ExcelDocumentService,
    PdfDocumentService,
    TxtDocumentService,
    DocDocumentService,
    CsvDocumentService
};

/**
 * Class Application
 */
class Application
{
    /** @var DocumentService $document Document. */
    private $document;

    /**
     * Class constructor.
     *
     * @param string $documentType User document type selected.
     *
     * @throws Exception Unknown format exception.
     */
    public function __construct(string $documentType)
    {
        switch ($documentType) {
            case 'excel':
                $this->document = new ExcelDocumentService();
                break;
            case 'xml':
                $this->document = new XmlDocumentService();
                break;
            case 'pdf':
                $this->document = new PdfDocumentService();
                break;
            case 'txt':
                $this->document = new TxtDocumentService();
                break;
            case 'doc':
                $this->document = new DocDocumentService();
                break;
            case 'csv':
                $this->document = new CsvDocumentService();
                break;
            default:
                throw new Exception("Unknown format");
        }
    }

    public function run(): void
    {
        $this->document->sendDocumentToClient();
    }
}