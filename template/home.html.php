<?php

use Rrd\Search\SearchDefines;

/**
 * @var string $queryUrl
 * @var string $uploadUrl
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

<h2 id="contribute-link"><a>➕ Contribute</a></h2>
<section id="contribute" class="hidden">
    <h3>Upload a file</h3>
    <form action="<?= htmlspecialchars($uploadUrl) ?>" method="post" enctype="multipart/form-data">
        <p>
            <span>Device category:</span>
            <label>
                <select name="device_type" required>
                    <option selected></option>
                    <option value="<?= SearchDefines::DEVICE_TYPE_GPU ?>">GPU</option>
                    <option value="<?= SearchDefines::DEVICE_TYPE_LAPTOP ?>">Laptop</option>
                    <option value="<?= SearchDefines::DEVICE_TYPE_IC ?>">IC</option>
                </select>
            </label>
        </p>
        <p>
            <span>Device name:</span>
            <label><input type="text" name="device_name" maxlength="60" required></label>
        </p>
        <p>
            <span>File category:</span>
            <label>
                <select name="file_category" required>
                    <option selected></option>
                    <option value="<?= SearchDefines::FILE_CAT_DATASHEET ?>>">Datasheet</option>
                    <option value="<?= SearchDefines::FILE_CAT_SCHEMATIC ?>">Schematic</option>
                    <option value="<?= SearchDefines::FILE_CAT_BOARD_VIEW ?>">Board View</option>
                </select>
            </label>
        </p>
        <p>
            <span>Proposed file:</span>
            <label><input type="file" accept=".cad,.pdf" name="proposed_file" required></label>
        </p>
        <p class="next-step"><button type="submit">Next ></button></p>
    </form>
</section>

<h2 id="about-link"><a>➕ About</a></h2>
<section id="about" class="hidden">
    <p>Hi, I'm just a small application to test something out.</p>
    <p>Please move along.</p>
</section>
