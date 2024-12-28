<?php include "layout/header.php";?>

<!-- data saving account in table  -->


<div class="container mx-auto p-6">
        <h2 class="text-center text-2xl font-bold mb-6">Table des Comptes Bancaires(Current Account)</h2>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Numéro du compte</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Solde ($)</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Retraits ($)</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Editer</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    include_once './database/dbConnect.php';
                    include_once './classes/Account.php';
                    $affich = new Account("currentaccount");
                    $result = $affich->affichage();
                    foreach($result as $row){
                        echo "<tr class='hover:bg-gray-50'>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Numero_de_compte']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Balance']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>".$row['Retrait']."</td>";
                        echo "<td class='py-3 px-6 text-sm text-gray-700'>
                                <button class='text-blue-500 hover:text-blue-700'>Editer</button>
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






<?php include "layout/footer.php";?>