<?php

/**
 * @var string $queryUrl
 */

?>
<section id="search-bar">
    <form action="<?= $queryUrl ?>" method="get">
        <fieldset>
            <label><input type="text" maxlength="60" name="query" placeholder="type anything…" required autofocus></label>
            <button type="submit"><img alt="" src="image/paw-print.png">Sniff!</button>
        </fieldset>
    </form>
</section>
