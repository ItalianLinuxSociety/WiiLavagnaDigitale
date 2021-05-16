<?php
/*
  Copyright (C) 2015/2018  Italian Linux Society - http://www.linux.it

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.*/
?>
<?php

require_once ('funzioni.php');
lugheader ('Home');

?>

<div id="introTabel">
    <div>
        <p>
            <b>Lavagna Libera</b> è la comunità italiana di riferimento per il software ed i contenuti liberi per la scuola. Sulla nostra mailing list, popolata da docenti, tecnici e simpatizzanti, si discute dell'utilizzo di applicazioni opensource in classe, si segnalano risorse e contenuti liberamente accessibili a supporto della didattica, si commentano fatti d'attualità in qualche modo connessi al mondo della tecnologia e della scuola, ed è possibile chiedere supporto per problematiche tecniche.
        </p>
    </div>

    <hr />

    <div class="subscribe">
        <a href="https://groups.google.com/forum/?hl=it#!forum/lavagnalibera/join" target="_blank">Iscriviti Subito!</a>
    </div>

    <div class="preview">
        <p>
            Ultimi messaggi pubblicati sulla mailing list. <a href="https://groups.google.com/forum/?hl=it#!forum/lavagnalibera">Clicca qui</a> per la consultazione completa.
        </p>

        <?php

        $url = 'https://groups.google.com/forum/feed/lavagnalibera/msgs/rss.xml?num=50';
        \Feed::$cacheDir = __DIR__ . '/tmp';
        \Feed::$cacheExpire = '5 hours';
        $rss = \Feed::loadRss($url);

        ?>

        <div class="feed">
            <?php foreach ($rss->item as $item): ?>
                <hr>
                <h4 style="margin:4px"><?php echo $item->title ?></h4>
                <p style="margin:0px"><?php echo date('d/m/Y H:i', (string) $item->timestamp) ?></p>
            <?php endforeach ?>
        </div>
    </div>
</div>

<div class="credits">
    <hr />
    <span>sito hostato da</span><br />
    <img src="/immagini/topix.jpg" alt="TopIX">
</div>

<?php
  lugfooter ();
?>
