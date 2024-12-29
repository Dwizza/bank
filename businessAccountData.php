<?php include "layout/header.php";?>

<!-- data saving account in table  -->

<div class="container mx-auto p-6">
        <h2 class="text-center text-2xl font-bold mb-6">Table des Comptes Bancaires(Business Account)</h2>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">#</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Numéro du compte</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Solde ($)</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Frais ($)</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Editer</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    include_once './database/dbConnect.php';
                    include_once './classes/Account.php';
                    $affich = new Account("besinnessaccount");
                    $result = $affich->affichage();
                    foreach($result as $row){
                        echo "<tr class='hover:bg-gray-50'>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Id']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Numero_de_compte']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Balance']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Frais']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>
                                <button class='text-blue-500 hover:text-blue-700' onclick='magic(event)'>Editer</button>
                            </td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>
                                <button class='text-red-500 hover:text-red-700'>Supprimer</button>
                            </td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>

    <div id="form" class="w-1/4 hidden mx-auto bg-gray-200 p-4 rounded-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
    </div>

    <script>
        function magic(event){
            const tr = event.target.parentElement.parentElement;
            const td = tr.children;
            const divForm = document.getElementById("form");
            const ID = td[0].textContent;
            const N_C = td[1].textContent;
            const Balance = td[2].textContent;
            const taux = td[3].textContent;
            const form =document.createElement("form");
            const inputID = document.createElement("input");
            const inputNC = document.createElement("input");
            const inputBL = document.createElement("input");
            const inputTX = document.createElement("input");
            const save = document.createElement("button");
            divForm.classList.remove("hidden");
            inputID.setAttribute("class","border border-gray-300 rounded-lg p-2 m-2");
            inputBL.setAttribute("class","border border-gray-300 rounded-lg p-2 m-2");
            inputNC.setAttribute("class","border border-gray-300 rounded-lg p-2 m-2");
            inputTX.setAttribute("class","border border-gray-300 rounded-lg p-2 m-2");
            save.textContent = "Save";
            save.setAttribute("type","submit");
            save.setAttribute("name","submit");
            save.setAttribute("class","bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded");
            inputID.value = ID;
            inputNC.value = N_C;
            inputBL.value = Balance;
            inputTX.value = taux;
            inputID.setAttribute("name","ID");
            inputID.setAttribute("readonly","readonly");
            inputNC.setAttribute("name","N_C");
            inputBL.setAttribute("name","balance");
            inputTX.setAttribute("name","frais");
            form.setAttribute("method","POST");
            form.setAttribute("class","flex flex-col items-center");
            form.appendChild(inputID);
            form.appendChild(inputNC);
            form.appendChild(inputBL);
            form.appendChild(inputTX);
            form.appendChild(save);
            divForm.appendChild(form);
            
        }
        
    </script>

<?php 
    include_once "./classes/BusinessAccount.php";
    if(isset($_POST['submit'])){
        $id = $_POST['ID'];
        $N_C = $_POST['N_C'];
        $balance = $_POST['balance'];
        $frais = $_POST['frais'];
        $update = new BusinessAccount($N_C,$balance,$frais);
        $update->Update($id);

    }
    
    ?>





<?php include "layout/footer.php";?>