<div id="ListeEmployeModel" class="modal hidden fixed inset-0 z-50 overflow-auto bg-smoke flex justify-center items-center">
    <div class="modal-container bg-white w-11/12 md:max-w-900 mx-auto rounded shadow-lg z-50 overflow-y-auto h-800">
        <div class="modal-content py-4 text-left px-6">
            <!-- Title for ListeEmployeModel -->
            <p class="text-2xl font-bold mb-4">Liste Employe</p>
            <!-- Filters Section -->
            <div class="mb-4">
                <!-- Add your filter buttons and inputs here -->
                <button class="bg-blue-500 text-white py-2 px-4 rounded mr-2">Filter 1</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded mr-2">Filter 2</button>
                <input type="text" placeholder="Search..." class="border rounded p-2">
            </div>

            <!-- Table Section -->
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Name</th>
                        <th class="py-2 px-4 border">Email</th>
                        <!-- Add more table headers as needed -->
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td class="py-2 px-4 border"></td>
                            <td class="py-2 px-4 border"></td>
                            <td class="py-2 px-4 border"></td>
                            <!-- Add more table cells as needed -->
                        </tr>
                </tbody>
            </table>
            
            <button id="closeListeEmployeModel" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Close</button>
        </div>
    </div>
</div>



<script>
    document.getElementById('openListeEmploye').addEventListener('click', function() {
        // Show the ListeEmployeModel when the link is clicked
        document.getElementById('ListeEmployeModel').classList.remove('hidden');
    });

    document.getElementById('closeListeEmployeModel').addEventListener('click', function() {
        // Hide the ListeEmployeModel when the close button is clicked
        document.getElementById('ListeEmployeModel').classList.add('hidden');
    });
</script>
