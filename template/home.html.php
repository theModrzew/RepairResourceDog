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

<h2 id="contribute-link"><a>➕ Contribute</a></h2>
<section id="contribute" class="hidden">
    <h3>Upload a file</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <span>Device category:</span>
            <label>
                <select name="" required>
                    <option selected></option>
                    <option value="">GPU</option>
                    <option value="">Laptop</option>
                    <option value="">IC</option>
                </select>
            </label>
        </p>
        <p>
            <span>Device name:</span>
            <label><input type="text" name="" maxlength="" required></label>
        </p>
        <p>
            <span>File category:</span>
            <label>
                <select name="" required>
                    <option selected></option>
                    <option value="">Datasheet</option>
                    <option value="">Schematic</option>
                    <option value="">Board View</option>
                </select>
            </label>
        </p>
        <p>
            <span>Proposed file:</span>
            <label><input type="file" accept=".cad,.pdf" name="proposedFile" required></label>
        </p>
        <p class="next-step"><button type="submit">Next ></button></p>
    </form>
</section>

<h2 id="about-link"><a>➕ About</a></h2>
<section id="about" class="hidden">
    <p>Hi, I'm just a small application to test something out.</p>
    <p>Please move along.</p>
</section>
