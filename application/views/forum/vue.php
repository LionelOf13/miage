<h1>Mon super titre</h1>
<p>
    voila ma superbe ouvelle vue
</p>
<!-- $tab['nom'] = 'foultier';
        $tab['prenom'] = 'hugo';
        $tab['identifiant'] = 'f20903397';
        $tab['age'] = 23;
        $tab['actif'] = TRUE;-->

mon nom est <?php echo $nom; ?><br>
mon prénom est <?php echo $prenom; ?><br>
mon identifiant est <?php echo $identifiant; ?><br>
mon âge est <?php echo $age; ?><br>
<?php if($actif): ?>
    je suis en ligne
<?php else: ?>
    je suis HL
<?php endif; ?>
    <br>
    URL
    <br>
    
    <a href="<?php echo site_url('ssc/forum/prout'); ?>">acceuil</a>
    <br>
