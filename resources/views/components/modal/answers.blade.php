<!-- Delete application Modal -->
<div x-cloak
    class="fixed left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
    x-data="{ open: @entangle('questionForm') }" x-show="open">
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex justify-end p-2">
                <button type="button" @click="open = false"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                    data-modal-toggle="delete-application-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form wire:submit.prevent="saveOption" class="p-6 pt-0 text-center">
                <h3 class="mt-5 mb-6 text-lg md:text-2xl font-medium md:font-bold capitalize dark:text-gray-400">Add
                    option</h3>
                <div class="w-full space-y-4 my-4 text-left">
                    <x-input.textarea label="Type your answers here" name="text" />
                    <x-input.check-box label="Is this the correct option" name="is_correct" wire:model="is_correct" />
                </div>
                <button
                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                    Add options
                </button>
                <button @click="open = false"
                    class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                    data-modal-toggle="delete-application-modal">
                    No, cancel
                </button>
            </form>
        </div>
    </div>
</div>
