<?php
/*
 
 ----------------------------------------------------------------------
GLPI - Gestionnaire libre de parc informatique
 Copyright (C) 2002 by the INDEPNET Development Team.
 http://indepnet.net/   http://glpi.indepnet.org

 ----------------------------------------------------------------------
 LICENSE

This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ----------------------------------------------------------------------
 Original Author of file:
 Purpose of file:
 ----------------------------------------------------------------------
*/
 

include ("_relpos.php");
include ($phproot . "/glpi/includes.php");

checkAuthentication("normal");


# Titre

echo "<html><body bgcolor=#ffffff>";
echo "<big><b>Génération des rapports excel</b></big><br><br>";
echo "<b> cliquez sur les liens pour generer et telecharger les fichiers de rapports excel</b><br><br>";

echo "<a href='convexcel/rapport-computer.php' target=blanc_>Ordinateurs</a><br><br>";
echo "<a href='convexcel/rapport-imprimantes.php' target=blanc_>Imprimantes</a><br><br>";
echo "<a href='convexcel/rapport-reseaux.php' target=blanc_>Materiel reseau</a><br><br>";
echo "<a href='convexcel/rapport-moniteurs.php' target=blanc_>Moniteurs</a>";
?>
