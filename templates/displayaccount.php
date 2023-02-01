<?php $title = 'Gestion du compte'; ?>

<?php ob_start(); ?>

<h1>Gestion du compte</h1>

<p>Identifiant : <?= $user->email ?></p>
<p>Prénom : <?= $user->firstName ?></p>
<p>Nom de famille : <?= $user->lastName ?></p>
<p><a href="index.php?action=displayuser">Modifier données</a></p>
<p><a href="index.php?action=deleteuser">Supprimer compte</a></p>
<p><a href="index.php">Retour</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>