<?php

declare(strict_types=1);

namespace App\Media;

use League\MimeTypeDetection\GeneratedExtensionToMimeTypeMap;

final class MimeTypeExtensionMap extends GeneratedExtensionToMimeTypeMap
{
    public const array ADDED_MIME_TYPES = [
        'mod' => 'audio/x-mod',
        'stm' => 'audio/x-mod',
        'fc' => 'audio/x-mod',
	'cus' => 'audio/x-mod',
    ];

    public function lookupMimeType(string $extension): ?string
    {
        return parent::lookupMimeType($extension)
            ?? self::ADDED_MIME_TYPES[$extension]
            ?? null;
    }
}
