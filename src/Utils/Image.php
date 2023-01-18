<?php

namespace Hafael\Fitbank\Utils;

use Hafael\Fitbank\Models\Document;

class Image
{

    const MIME_JPG  = 'image/jpg';
    const MIME_JPEG = 'image/jpeg';
    const MIME_PNG  = 'image/png';
    const MIME_PDF  = 'application/pdf';
    const MIME_TXT  = 'text/plain';

    /**
     * @var string
     */
    public $mime;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $contents;

    /**
     * Model constructor.
     * 
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->mime = mime_content_type($path);
        $this->contents = file_get_contents($this->path);
    }

    /**
     * @param int $path
     */
    public static function get(string $path)
    {
        return new Image($path);
    }

    /**
     * @param string $mimeType
     * @return int
     */
    public static function formatFromMime(string $mimeType)
    {
        return [
            self::MIME_JPEG => Document::FORMAT_JPEG,
            self::MIME_JPG  => Document::FORMAT_JPG,
            self::MIME_PNG  => Document::FORMAT_PNG,
            self::MIME_PDF  => Document::FORMAT_PDF,
            self::MIME_TXT  => Document::FORMAT_TXT,
        ][$mimeType];
    }

    /**
     * @param string $mimeType
     * @return int
     */
    public static function extensionFromMime(string $mimeType)
    {
        return [
            self::MIME_JPEG => '.jpeg',
            self::MIME_JPG  => '.jpg',
            self::MIME_PNG  => '.png',
            self::MIME_PDF  => '.pdf',
            self::MIME_TXT  => '.txt',
        ][$mimeType];
    }

    /**
     * @return string
     */
    public function mimeType()
    {
        return $this->mime;
    }

    /**
     * @return string
     */
    public function extension()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }

    /**
     * @return int
     */
    public function formatCode()
    {
        $formats = [
            self::MIME_PDF  => 0,
            self::MIME_JPG  => 1,
            self::MIME_JPEG => 2,
            self::MIME_PNG  => 3,
            self::MIME_TXT  => 4,
        ];

        if($this->extension() === 'jpg') {
            return $formats[self::MIME_JPG];
        }
        
        return $formats[$this->mimeType()];
    }

    /**
     * @return string
     */
    public function toBase64()
    {
        return base64_encode($this->contents);
    }

    /**
     * @return string
     */
    public function toBase64Src()
    {
        return 'data:' . $this->mimeType() . ';base64,' . $this->toBase64();
    }

}