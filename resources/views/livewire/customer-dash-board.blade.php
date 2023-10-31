<div class="w-full pt-6 space-y-4 lg:space-y-6">
    <x-greeting />
    <div class="grid grid-cols-1 gap-4 lg:gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-4 dark:bg-gray-900">
        <x-board name="Balance" currency="true" value="{{ random_int(10, 1028) }}">
            <i class="fa-regular fa-wallet"></i>
        </x-board>
        <x-board name="Total Earnings" currency="true" value="{{ random_int(1780, 102080) }}">
            <i class="fa-solid fa-money-bill"></i>
        </x-board>
        <x-board name="Orders" value="{{ random_int(2, 128) }}">
            <i class="fa-brands fa-product-hunt"></i>
        </x-board>
        <x-board name="Network" value="{{ random_int(20, 1728) }}">
            <i class="fa-regular fa-people-group"></i>
        </x-board>
        <x-board name="Total Reviews" value="{{ random_int(4, 108) }}">
            <i class="fa-regular fa-pen"></i>
        </x-board>

    </div>
</div>
