<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full border border-gray-300 dark:border-gray-700 text-center">
                        <thead>
                            <tr>
                                <th class="border-b border-r dark:border-gray-600">Virus Name</th>
                                <th class="border-b border-r dark:border-gray-600">Type</th>
                                <th class="border-b border-r dark:border-gray-600">Danger Level</th>
                                <th class="border-b border-r dark:border-gray-600">Affected Platforms</th>
                                <th class="border-b border-r dark:border-gray-600">symptoms</th>
                                <th class="border-b border-r dark:border-gray-600">distribution_method</th>
                                <th class="border-b border-r dark:border-gray-600">prevention</th>
                                <th class="border-b border-r dark:border-gray-600">removal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows here -->
                            @foreach ($viruses as $virus)
                                <tr class="border-b">
                                    <td class="border-r dark:border-gray-600">{{$virus->name}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->type}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->danger_level}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->affected_platform}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->symptoms}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->distribution_method}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->prevention}}</td>
                                    <td class="border-r dark:border-gray-600">{{$virus->removal}}</td>
                                </tr>
                            @endforeach

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
