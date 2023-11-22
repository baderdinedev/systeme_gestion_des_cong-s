<div id="EmployeModel" class="modal hidden fixed inset-0 z-50 overflow-auto bg-smoke flex justify-center items-center">
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!-- Header Menu -->
            <div class="flex justify-between items-center mb-4">
                <p class="text-2xl font-bold">Employe</p>
                <div class="flex space-x-4">
                <div class="flex items-center space-x-4 mt-4">
                    
                    <a href="#" class="text-blue-500 hover:underline" id="openAjouterEmployee">Ajouter Employe</a>

                    
                    <a href="#" class="text-blue-500 hover:underline" id="openListeEmploye">Liste Employe</a>

                   
                    <x-ajouter-employe-model />


                    <x-list-employe-model />


                </div>

                </div>
            </div>

            <!-- Add your main modal content here -->
            
            <button id="closeEmployeModel" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Close</button>
        </div>
    </div>
</div>



<script>
    document.getElementById('openEmployeModel').addEventListener('click', function() {
        // Show the modal when the link is clicked
        document.getElementById('EmployeModel').classList.remove('hidden');
    });

    document.getElementById('closeEmployeModel').addEventListener('click', function() {
        // Hide the modal when the close button is clicked
        document.getElementById('EmployeModel').classList.add('hidden');
    });

    window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('EmployeModel')) {
            // Hide the modal when clicking outside the EmployeModel content
            document.getElementById('EmployeModel').classList.add('hidden');
        }
    });
</script>