<div class="grid grid-cols-1 px-4 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 text-white col-span-full xl:mb-2">
        <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-white hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('users') }}"
                            class="ml-1 {{ request()->is('admin/user') ? 'text-primary py-1 px-2 rounded bg-primary-50' : 'text-white' }} hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                    </div>
                </li>
            </ol>
        </nav>
        <h1 class="text-xl font-semibold text-white sm:text-2xl">Users
        </h1>
    </div>
    <div class="w-full p-4 space-y-4 bg-white rounded-lg shadow-sm lg:space-y-6">
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <div class="flex items-center mb-4 sm:mb-0">
                <div class="flex flex-wrap items-center space-x-2 lg:flex-nowrap">
                    <x-search />
                    <x-select-page :cnt="$total" />
                </div>
                @if (count($checked))
                    <div class="flex items-center w-full sm:justify-end">
                        <div class="flex items-center pl-3 space-x-1">
                            <span href="#"
                                class="inline-flex justify-center p-1.5 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <i class="text-xl fa-solid fa-print"></i>
                            </span>
                            <x-bulk-delete />
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif

            </div>
            <div class="flex flex-wrap items-center space-x-2">
                <x-button.add name="User" />
            </div>
            {{ var_dump(currentUserPermissions()) }}
        </div>

        <div class="w-full">
            <div
                class="mb-4 overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-900">
                <table id="" class="w-full overflow-x-auto rounded bord">
                    <thead class="w-full overflow-x-auto rounded">
                        <tr class="w-full font-medium bg-gray-100 rounded">
                            <th class="p-4 font-medium text-left">
                                <input type="checkbox" value="" wire:model="all" class="select-input">
                            </th>
                            <th class="p-4 font-medium text-left">No</th>
                            <th class="p-4 font-medium text-left">Name</th>
                            <th class="p-4 font-medium text-left">Email</th>
                            <th class="p-4 font-medium text-left">Phone</th>
                            <th class="p-4 font-medium text-left">Role</th>
                            <th class="p-4 font-medium text-left">Status</th>
                            <th class="p-4 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr wire:key='{{ $user->id }}' class="border-b even:bg-gray-50">
                                <td class="p-4"> <input type="checkbox" value="{{ $user->id }}"
                                        wire:model.live="checked" class="select-input"></td>
                                <td class="p-4">{{ $loop->iteration }}</td>
                                <td class="p-4 text-sm break-keep nowrap">{{ $user->firstname . ' ' . $user->surname }}
                                </td>
                                <td class="p-4">
                                    <a href="{{ 'mailto:' . $user->email }}" class="">{{ $user->email }}</a>
                                </td>
                                <td class="p-4">
                                    <a href="{{ 'mailto:' . $user->phone }}"
                                        class="text-sm nowrap">{{ $user->phone }}</a>
                                </td>
                                <td class="p-4 text-sm uppercase">{{ $user->current_role }}</td>
                                <td class="p-4 text-sm uppercase">{{ $user->status }}</td>
                                <td class="p-4">
                                    <p class="flex items-center justify-center space-x-2">
                                        <button wire:click="editUser({{ $user->id }})" data-tooltip-target="edit"
                                            data-tooltip-placement="left"
                                            class="text-blue-600 border border-blue-600 rounded-md h-7 w-7">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button wire:click="confirmDelete({{ $user->id }})"
                                            data-tooltip-target="delete" data-tooltip-placement="left"
                                            class="text-red-600 border border-red-600 rounded-md h-7 w-7">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="8">No data...</td>
                            </tr>
                        @endforelse
                        {{-- edit tooltip --}}
                        <x-tooltip id="edit" content="Edit User" />

                        {{-- edit tooltip --}}
                        <x-tooltip id="delete" content="Delete User" />
                    </tbody>
                </table>
                <div class="px-4">
                    <p class="my-2">
                        {{ $users->links() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- confirmation button --}}
    <x-confirm-delete
        text="Are you sure you want to delete this,
this action is irreversible. All the associated data link agents, trips will also be deleted as well" />


</div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">
@endpush
@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
    <script>
        new DataTable('#datatable');
    </script> --}}
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('swal:success', (event) => {
                Swal.fire(event.details)
                setTimeout(() => {
                    location.reload();
                }, 5000);
            });
        });
    </script>
@endpush
