<?php
/*
  Copyright (C) 2015  Italian Linux Society - http://www.linux.it

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
            <b>Wii Lavagna Digitale</b> (più spesso abbreviato in WiiLD) è la comunità italiana di riferimento per il software ed i contenuti liberi per la scuola. Sulla nostra mailing list, popolata da docenti, tecnici e simpatizzanti, si discute dell'utilizzo di applicazioni opensource in classe, si segnalano risorse e contenuti liberamente accessibili a supporto della didattica, si commentano fatti d'attualità in qualche modo connessi al mondo della tecnologia e della scuola, ed è possibile chiedere supporto per problematiche tecniche.
        </p>
    </div>

    <div class="subscribe">
        <a href="https://groups.google.com/forum/?hl=it#!forum/wii_libera_la_lavagna/join" target="_blank">Iscriviti Subito!</a>
    </div>

    <hr />

    <div class="column preview">
        <iframe id="forum_embed" src="javascript:void(0)" scrolling="no" frameborder="0" width="100%" height="700">
        </iframe>

        <script type="text/javascript">
            document.getElementById("forum_embed").src = "https://groups.google.com/forum/embed/?place=forum/wii_libera_la_lavagna" +
                                                            "&showsearch=false&hideforumtitle=true&parenturl=" +
                                                            encodeURIComponent(window.location.href);
        </script>
    </div>

    <div class="column highlights">
        <p>
            Qui di seguito i riferimenti ad alcune delle discussioni più rilevanti transitate sulla mailing list. Vengono aggiornati una volta al mese, e pubblicati anche sulla newsletter di Italian Linux Society.
        </p>

        <ul>
            <?php

            $contents = file ('data/highlights.txt');
            for ($i = 0; $i < 15 && $i < count($contents); $i++) {
                list ($title, $link) = explode ('|', $contents[$i]);
                ?>
                <li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>
                <?php
            }

            ?>
        </ul>
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
