<?php

/**
 * @var string $queryUrl
 */

?>
<section id="search-bar">
    <form action="<?= $queryUrl ?>" method="get">
        <fieldset>
            <label><input type="text" maxlength="60" name="query" placeholder="type anything…" required></label>
            <button type="submit">Sniff!</button>
        </fieldset>
    </form>
</section>
