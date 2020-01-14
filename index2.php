<hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php //list of day ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php //list of month ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php //list of year ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que sa valeur vaut "fille" -->
     <p>
       Je suis une fille
     </p>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que sa valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
  </body>
</html>