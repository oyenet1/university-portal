<div class="grid grid-cols-1 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
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
                        <a href="/user/profile"
                            class="ml-1 {{ request()->is('user/profile') ? 'text-primary py-1 px-2 rounded bg-primary-50' : 'text-white' }} hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Profile</a>
                    </div>
                </li>
            </ol>
        </nav>
        <h1 class="text-xl font-semibold text-white sm:text-2xl">Profile
        </h1>
    </div>
    <!-- Right Content -->
    <div class="col-span-full xl:col-auto">
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-900">
            <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                <input type="file" wire:model.defer="avatar" id="avatar" class="hidden">
                @if (auth()->user()->avatar && !$avatar)
                    <img src="{{ asset('/storage/' . auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}"
                        class="object-cover w-20 h-20 mt-2 border border-gray-200 rounded-full shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
                @elseif($avatar)
                    <img src="{{ $avatar->temporaryUrl() }}" alt="{{ auth()->user()->name }}"
                        class="object-cover w-20 h-20 mt-2 border border-gray-200 rounded-full shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
                @else
                    <img src="/img/avatar.png" alt="{{ auth()->user()->name }}"
                        class="object-cover w-20 h-20 mt-2 border border-gray-200 rounded-full shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
                @endif
                <form wire:submit.prevent="changeProfileImage()">
                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture
                    </h3>
                    <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                        @if ($errors->any())
                            @error('changeProfileImage')
                                <span class="mb-2 text-red-600">{{ $message }}</span>
                            @enderror
                        @else
                            <span> JPG, GIF or PNG. Max size of 500K</span>
                        @endif

                    </div>
                    <div class="flex items-center space-x-4">
                        @if ($avatar)
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                    </path>
                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                </svg>
                                Upload picture
                            </button>
                        @else
                            <label for="avatar"
                                class="px-4 py-2 text-sm text-white bg-green-600 rounded-full shadow cursor-pointer">choose
                                pic</label>
                        @endif

                        <button wire:click="removeProfilePicture()"
                            class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-span-2">
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-900">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
            <form wire:submit.prevent="updateBio()">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-input.text name="firstname" wire:model.defer="firstname" label="First Name" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input.text name="surname" wire:model.defer="surname" label="Surname" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input.text name="uci" wire:model.defer="uci" label="UCI" disabled
                            class="uppercase disabled:bg-gray-100 disabled:border-0 disabled:cursor-not-allowed disabled:text-gray-500" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input.text name="email" wire:model.defer="email" label="Email Address" disabled
                            class="lowercase disabled:bg-gray-100 disabled:border-0 disabled:cursor-not-allowed disabled:text-gray-500" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-input.text name="phone" wire:model.defer="phone" label="Phone Number"
                            placeholder="8012341234" />
                    </div>

                    <div class="col-span-6 sm:col-full">
                        <button
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-900">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
            <form wire:submit.prevent="updatePassword()">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 md:w-1/2">
                        <x-input.password name="current_password" label="Current Password" />
                    </div>
                    <div class="col-span-6 md:w-1/2">
                        <x-input.password name="password" label="New Password" />
                    </div>
                    <div class="col-span-6 md:w-1/2">
                        <x-input.password name="password_confirmation" label="Repeat Password" />
                    </div>
                    <div class="col-span-6 sm:col-full">
                        <button
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
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
