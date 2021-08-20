## Factory Pattern

For example, I create an application to generate and send for client a document in selected document format (xlsx, doc, txt...)

- **services/DocumentService.php** - document service abstract class creating and sending for client a document
- **services/[Csv|Doc|Excel|Pdf|Txt|Xml]DocumentService.php** - document service creating a document in specific type
- **documents/Document.php** - document interface
- **documents/[Csv|Doc|Excel|Pdf|Txt|Xml]Document.php** - specific document type class
- **Application.php** - creates an object of document service and send the document for client
- **index.php** - client code