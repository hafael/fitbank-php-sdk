<?php

namespace Hafael\Fitbank\Models;

use Hafael\Fitbank\Utils\Image;

class Document
{

    const FORMAT_PDF  = 0;
    const FORMAT_JPG  = 1;
    const FORMAT_JPEG = 2;
    const FORMAT_TXT  = 3;
    const FORMAT_PNG  = 4;

    const TYPE_IDENTITY_FRONT     = 0;
    const TYPE_TAX_NUMBER         = 1;
    const TYPE_PROOF_ADDRESS      = 2;
    const TYPE_CNH                = 3;
    const TYPE_CNPJ               = 4;
    const TYPE_CONTRACT           = 5;
    const TYPE_LETTER_OF_ATTORNEY = 6;
    const TYPE_IDENTITY_VERSE     = 7;
    const TYPE_ERROR              = 8;

    const DESCRIPTIONS = [
        self::TYPE_IDENTITY_FRONT     => 'RG FRENTE',
        self::TYPE_IDENTITY_VERSE     => 'RG VERSO',
        self::TYPE_TAX_NUMBER         => 'CPF',
        self::TYPE_PROOF_ADDRESS      => 'Comprovante de Endereço',
        self::TYPE_CNH                => 'Carteira Nacional de Habilitação',
        self::TYPE_CNPJ               => 'Comprovante de situação cadastral do CNPJ',
        self::TYPE_CONTRACT           => 'Contrato Social da empresa',
        self::TYPE_LETTER_OF_ATTORNEY => 'Procuração',
        self::TYPE_ERROR              => 'Erro',
    ];

    const DOCUMENT_NAME = [
        self::TYPE_IDENTITY_FRONT     => 'Identidade',
        self::TYPE_IDENTITY_VERSE     => 'Identidade',
        self::TYPE_TAX_NUMBER         => 'CPF',
        self::TYPE_PROOF_ADDRESS      => 'Comprovante de Endereço',
        self::TYPE_CNH                => 'CNH',
        self::TYPE_CNPJ               => 'CNPJ',
        self::TYPE_CONTRACT           => 'Contrato Social',
        self::TYPE_LETTER_OF_ATTORNEY => 'Procuração',
        self::TYPE_ERROR              => 'Erro',
    ];

    /**
     * @var int
     */
    public $documentFormat = self::FORMAT_JPEG;

    /**
     * @var int
     */
    public $documentType = self::TYPE_IDENTITY_FRONT;

    /**
     * @var string
     */
    public $documentFile;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['documentFormat'])) {
            $this->documentFormat($data['documentFormat']);
        }
        if(isset($data['documentType'])) {
            $this->documentType($data['documentType']);
        }
        if(isset($data['documentFile'])) {
            $this->documentFile($data['documentFile']);
        }
        if(isset($data['documentName'])) {
            $this->documentName($data['documentName']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['expirationDate'])) {
            $this->expirationDate($data['expirationDate']);
        }
    }

    /**
     * @param Image $image
     */
    public static function fromImage(Image $image)
    {
        $document = (new Document())->documentFormat($image->formatCode())
                                    ->documentFile($image->toBase64());

        return $document;
    }

    /**
     * @param string $encodedImage
     * @param int $format
     */
    public static function fromBase64($encodedImage, $format = DOCUMENT::FORMAT_JPG)
    {
        $document = (new Document())->documentFormat($format)
                                    ->documentFile($encodedImage);

        return $document;
    }

    /**
     * @param string $type
     * @return int
     */
    public static function getDocumentType($type)
    {
        return [
            'IDENTITY_FRONT'     => self::TYPE_IDENTITY_FRONT,
            'IDENTITY_VERSE'     => self::TYPE_IDENTITY_VERSE,
            'CNH'                => self::TYPE_CNH,
            'PROOF_ADDRESS'      => self::TYPE_PROOF_ADDRESS,
            'TAX_NUMBER'         => self::TYPE_TAX_NUMBER,
            'CNPJ'               => self::TYPE_CNPJ,
            'CONTRACT'           => self::TYPE_CONTRACT,
            'LETTER_OF_ATTORNEY' => self::TYPE_LETTER_OF_ATTORNEY,
        ][$type];
    }

    /**
     * @param int $documentFormat
     */
    public function documentFormat(int $documentFormat)
    {
        $this->documentFormat = $documentFormat;
        return $this;
    }

    /**
     * @param int $documentType
     */
    public function documentType(int $documentType)
    {
        $this->documentType = $documentType;

        $this->description(self::DESCRIPTIONS[$this->documentType]);
        $this->documentName(self::DOCUMENT_NAME[$this->documentType]);

        return $this;
    }

    /**
     * @param string $documentFile
     */
    public function documentFile(string $documentFile)
    {
        

        if(strpos($documentFile, 'data:') === false) {
            $this->documentFile = $documentFile;
        }else {
            $data = explode( ',', $documentFile );
            $this->documentFile = $data[1];
        }

        return $this;
    }

    /**
     * @param string $documentName
     */
    public function documentName(string $documentName)
    {
        $this->documentName = $documentName;
        return $this;
    }

    /**
     * @param string $description
     */
    public function description(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $expirationDate
     */
    public function expirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'DocumentFile'   => $this->documentFile,
            'DocumentFormat' => $this->documentFormat,
            'DocumentName'   => $this->documentName,
            'DocumentType'   => $this->documentType,
            'Description'    => $this->description,
            'ExpirationDate' => $this->expirationDate,
        ]);
    }
}