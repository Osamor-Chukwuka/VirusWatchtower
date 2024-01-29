<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Virus') }}
        </h2>
    </x-slot>
    <div id="successAlert">
        @if (session('status'))
            <div class="bg-green-500 text-white p-4 rounded-md shadow-md">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-black">
                    <div class="py-12">
                        <div class=" mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class=" text-gray-900 dark:text-gray-900">
                                    <form action="{{ route('storeVirus') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="flex">
                                            <div class="w-1/2 p-4">
                                                <div class="mb-4">
                                                    <label for="virus_name"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Virus
                                                        Name</label>
                                                    <input type="text" name="name" id="virus_name"
                                                        class="mt-1 p-2 border rounded-md w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
                                                    <input type="text" name="type" id="virus_type"
                                                        class="mt-1 p-2 border rounded-md w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Danger
                                                        Level</label>
                                                    <input type="text" name="danger_level" id="virus_type"
                                                        class="mt-1 p-2 border rounded-md w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Affected
                                                        Platform</label>
                                                    <input type="text" name="affected_platform" id="virus_type"
                                                        class="mt-1 p-2 border rounded-md w-full" required>
                                                </div>
                                            </div>

                                            <div class="w-1/2 p-4">
                                                <div class="mb-4">
                                                    <label for="virus_name"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Virus
                                                        Symptoms</label>
                                                    <textarea type="text" name="symptoms" id="virus_name" class="mt-1 p-2 border rounded-md w-full" required></textarea>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Distribution
                                                        Method</label>
                                                    <textarea type="text" name="distribution_method" id="virus_type" class="mt-1 p-2 border rounded-md w-full" required></textarea>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prevention</label>
                                                    <textarea type="text" name="prevention" id="virus_type" class="mt-1 p-2 border rounded-md w-full" required></textarea>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="virus_type"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Removal</label>
                                                    <textarea type="text" name="removal" id="virus_type" class="mt-1 p-2 border rounded-md w-full" required></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Repeat similar structures for other fields -->

                                        <div class="mt-4">
                                            <button type="submit" class="bg-blue-500 text-white p-3 rounded-md">Add
                                                Virus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    setTimeout(function() {
        var alertElement = document.getElementById('successAlert');
        if (alertElement) {
            alertElement.remove();
        }
    }, 3000);
</script>
