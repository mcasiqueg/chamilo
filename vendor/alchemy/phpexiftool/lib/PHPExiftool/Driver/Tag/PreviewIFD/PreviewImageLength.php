<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PreviewIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTag
{

    protected $Id = 514;

    protected $Name = 'PreviewImageLength';

    protected $FullName = 'Nikon::PreviewIFD';

    protected $GroupName = 'PreviewIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'PreviewIFD';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Preview Image Length';

    protected $flag_Permanent = true;

    protected $flag_Protected = true;

}
