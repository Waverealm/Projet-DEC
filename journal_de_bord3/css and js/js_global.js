         /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         // Fonctions permettant de cacher/montrer grâce à la priopriété display certains champs de l'inscription selon //
         // le type d'utilisateur sélectionné                                                                           //
         /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

         // Appelle la bonne fonction selon la valeur du select
         function checkOption(optionSelected)
         {
            if(optionSelected == "Default") 
            {
               hideAllFields();
            }

            if(optionSelected == "Stagiaire")
            {
               showStudentFields();
            }

            if(optionSelected == "Responsable")
            {
               showTeacherFields();
            }
         }

         // Cache et vide tous les champs spécfiques
         function hideAllFields() {

            document.getElementById("num_ad").style.display = "none";
            document.getElementById("lieu_stage").style.display = "none";
            document.getElementById("type_resp").style.display = "none";

            document.getElementById("num_ad").value = "";
            document.getElementById("lieu_stage").value = "";
            document.getElementById("type_resp").value = "choix1";
         }
         
         // Montre les champs spécifiques au stagiaire puis cache et vide les autres
         function showStudentFields() {      

            document.getElementById("num_ad").style.display = '';
            document.getElementById("lieu_stage").style.display = '';
            document.getElementById("type_resp").style.display = "none";

            document.getElementById("type_resp").value = "choix1";
         }
         
         // Montre les champs spécifiques au responsable puis cache et vide les autres
         function showTeacherFields() {

            document.getElementById("num_ad").style.display = "none";
            document.getElementById("lieu_stage").style.display = "none";
            document.getElementById("type_resp").style.display = '';

            document.getElementById("num_ad").value = "";
            document.getElementById("lieu_stage").value = "";
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

         // Vérifie que les caractères entrés dans le champ de texte sont des chiffres.
         // Si autre chose que des chiffres est entré, cela sera automatiquement effacé.
         function checkIfOnlyNumbers(field)
         {
            var numbers = new RegExp("[0-9]");
            var verification;

            for (i = 0; i < field.value.length; i++)
            {
               verification = numbers.test(field.value.charAt(i));

               if(verification == false)
               {
                  field.value = field.value.substr(0,i) + field.value.substr(i+1, field.value.length-i+1);
                  i--;
               }
            }
         }