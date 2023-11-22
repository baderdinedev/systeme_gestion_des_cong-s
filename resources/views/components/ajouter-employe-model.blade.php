<!-- Second Modal (AjouterEmployee) -->
<div id="AjouterEmployeeModel" class="modal hidden fixed inset-0 z-50 overflow-auto bg-smoke flex justify-center items-center">
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!-- Title for AjouterEmployeeModel -->
            <p class="text-2xl font-bold mb-4">Ajouter Employe</p>

            <!-- Form for adding an employee -->
            <form action="" method="post">
                @csrf
                <label for="employee_name" class="block text-gray-700 text-sm font-bold mb-2">Nom de l'employé:</label>
                <input type="text" id="employee_name" name="employee_name" class="w-full p-2 border rounded mb-4">

                <label for="employee_prenom" class="block text-gray-700 text-sm font-bold mb-2">Prenom de l'employé:</label>
                <input type="text" id="employee_prenom" name="employee_prenom" class="w-full p-2 border rounded mb-4">

                <label for="employee_telephone" class="block text-gray-700 text-sm font-bold mb-2">Numero de Télephone:</label>
                <input type="text" id="employee_tel" name="employee_tel" class="w-full p-2 border rounded mb-4">

                <label for="employee_email" class="block text-gray-700 text-sm font-bold mb-2">Email l'employé:</label>
                <input type="text" id="employee_email" name="employee_email" class="w-full p-2 border rounded mb-4">

                <label for="employee_name" class="block text-gray-700 text-sm font-bold mb-2">Password l'employé:</label>
                <input type="text" id="employee_name" name="employee_password" class="w-full p-2 border rounded mb-4">

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Ajouter Employe</button>
            </form>

            <button id="closeAjouterEmployeeModel" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Close</button>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script>
    document.getElementById('openAjouterEmployee').addEventListener('click', function() {
        // Show the AjouterEmployeeModel when the link is clicked
        document.getElementById('AjouterEmployeeModel').classList.remove('hidden');
    });

    document.getElementById('closeAjouterEmployeeModel').addEventListener('click', function() {
        // Hide the AjouterEmployeeModel when the close button is clicked
        document.getElementById('AjouterEmployeeModel').classList.add('hidden');
    });
</script>