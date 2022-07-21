<?php

namespace EmizorIpx\OfficePhp74;

class Format
{
    const Xlsx = 'xlsx'; // sheets | grid => reader + write
    const Pdf = 'pdf'; // sheets | grid => writer
    const Html = 'html'; // sheets | grid => reader + write
    const Ods = 'ods'; // sheets | grid => reader + write

    /**
     * @return string
     */
    public function fileExtension(): string
    {
        return match_data($this,
        [
            Format::Xlsx => 'xlsx',
            Format::Pdf => 'pdf',
            Format::Html => 'html',
            Format::Ods => 'ods',
        ]);
    }

    /**
     * MIME
     *
     * @return string
     */
    public function contentType(): string
    {
        return match_data($this,
        [
            Format::Xlsx => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            Format::Pdf => 'application/pdf',
            Format::Html => 'text/html',
            Format::Ods => 'application/vnd.oasis.opendocument.spreadsheet',
        ]);
    }

    public static function tryFrom ($value) {

        switch ($value) {
            case Format::Xlsx:
                return Format::Xlsx;
                break;
            case Format::Pdf:
                return Format::Pdf;
                break;
            case Format::Html:
                return Format::Html;
                break;
            case Format::Ods:
                return Format::Ods;
                break;
            
            default:
                return null;
                break;
        }

    }
}
