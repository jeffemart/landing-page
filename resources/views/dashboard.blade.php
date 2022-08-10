<x-app-layout>
    <x-slot name="header">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-gray-100 mt-5 max-w-7xl mx-auto shadow overflow-hidden sm:rounded-lg">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="px-4 mt-5 md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Formulário</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful
                            what you
                            share.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-white px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="company-website" class="block text-sm font-medium text-gray-700">
                                            Website </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
                                            <input type="text" name="company-website" id="company-website"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                   placeholder="www.example.com">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="about" class="block text-sm font-medium text-gray-700"> About </label>
                                    <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                          placeholder="you@example.com"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are
                                        hyperlinked.</p>
                                </div>

                            </div>
                            <div class="px-4 py-4 bg-white text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
