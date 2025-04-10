<?php

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Block\Gallery\Controller;
use Concrete\Core\Entity\File\File;
use Concrete\Core\Entity\File\Version;

/** @var Controller $controller */
/** @var bool $includeDownloadLink */
/** @var int $bID */

$page = $controller->getCollectionObject();
$images = $images ?? [];

if (!$images && $page && $page->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item">
        <?php
        echo t('Empty Gallery Block.') ?>
    </div>
    <?php

    // Stop outputting
    return;
}
?>

<div class="logos" id="logoContainer">
    <?php foreach ($images as $image) { ?>
        <?php if ($image['file'] instanceof File) { ?>
            <?php $fv = $image['file']->getApprovedVersion(); ?>

            <?php if ($fv instanceof Version) { ?>
                <img class="image" src="<?php echo h($fv->getURL()); ?>"
                     alt="<?php echo h($fv->getTitle()) ?>"/>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>