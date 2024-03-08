<?php

/**
 * @var string $siteName
 * @var int $yearNow
 * @var int $yearStarted
 */

?>
<footer>
    <?php if ($yearNow != $yearStarted): ?>
        <?= $yearStarted ?> -
    <?php endif ?>
    <?= $yearNow ?> <?= $siteName ?>
</footer>
