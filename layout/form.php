<div class="mx-auto block max-w-md rounded-lg mt-10 bg-white p-6 shadow-4 dark:bg-surface-dark">
    <h1 class="text-center text-xl mb-2">Add an account</h1>
    <form class="flex flex-col items-center" action="" method="POST">
        <div class="relative mb-3 w-full" data-twe-input-wrapper-init>
            <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput1" name="an" placeholder="Example label" />
            <label for="exampleFormControlInput1"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Account Number
            </label>
        </div>
        <div class="relative mb-3 w-full" data-twe-input-wrapper-init>
            <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput1" name="balance" placeholder="Example label" />
            <label for="exampleFormControlInput1"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Balance
            </label>
        </div>
        <div class="w-full mb-3">
            <select id="select" name="type" onclick="savingAccount()" class="block py-2.5 px-3 w-full text-sm text-gray-500 bg-transparent border-0 border-2 rounded-md border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected>Account Type</option>
                <option value="Saving Account">Saving Account</option>
                <option value="Current Account">Current Account</option>
                <option value="Business Account">Business Account</option>
            </select>
        </div>
        <div class="relative mb-3 w-full hidden" data-twe-input-wrapper-init>
            <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="taux" name="taux" placeholder="Example label" />
            <label for="taux"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Taux d'interet
            </label>
        </div>
        <div class="relative mb-3 w-full hidden" data-twe-input-wrapper-init>
            <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="retrait" name="retrait" placeholder="Example label" />
            <label for="retrait"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Retrait
            </label>
        </div>
        <div class="relative mb-3 w-full hidden" data-twe-input-wrapper-init>
            <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                id="frais" name="frais" placeholder="Example label" />
            <label for="frais"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Frais
            </label>
        </div>
        <button name="submit" class="relative mb-3 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Add Account
            </span>
        </button>
    </form>
</div>
<?php 
    include './classes/SavingsAccount.php';
    include './classes/BusinessAccount.php';
    include './classes/CurrentAccount.php';
    if(isset($_POST["submit"])){
        $NC = $_POST["an"];
        $BL = $_POST["balance"];
        $taux = $_POST["taux"];
        $frais = $_POST["frais"];
        $retrait = $_POST["retrait"];
        if($NC!=""&&$BL!=""){
            if($taux != ""){
                $account = new SavingsAccount("$NC","$BL","$taux");
                $account->ajouterS();
            }
        }else{echo "<script>Swal.fire({
                    position: \"center\",
                    icon: \"error\",
                    title: \"Fill all field !\",
                    showConfirmButton: false,
                    timer: 1500
                    });</script>";}
        if($NC!=""&&$BL!=""){
            if($frais != ""){
                $account = new BusinessAccount("$NC","$BL","$frais");
                $account->ajouterB();
            }
        }else{echo "";}
        if($NC!=""&&$BL!=""){
            if($retrait != ""){
                $account = new CurrentAccount("$NC","$BL","$retrait");
                $account->ajouterC();
            }
        }else{echo "";}
    }
?>

<script>
    const select =document.getElementById("select");
    const taux = document.getElementById("taux").parentElement;
    const retrait = document.getElementById("retrait").parentElement;
    const frais = document.getElementById("frais").parentElement;
    
    function savingAccount(){ 
        if(select.value === "Saving Account"){
            taux.classList.remove("hidden");
            retrait.classList.add("hidden");
            frais.classList.add("hidden");
        }else if(select.value === "Current Account"){
            retrait.classList.remove("hidden");
            taux.classList.add("hidden");
            frais.classList.add("hidden");
        }else if(select.value === "Business Account"){
            frais.classList.remove("hidden");
            taux.classList.add("hidden");
            retrait.classList.add("hidden");
        }else{
            frais.classList.add("hidden");
            taux.classList.add("hidden");
            retrait.classList.add("hidden");
        }
    }
    
</script>
