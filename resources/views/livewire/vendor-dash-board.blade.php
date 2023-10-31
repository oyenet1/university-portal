<div class="w-full pt-6 space-y-4 lg:space-y-6">
    <x-greeting />
    <div class="grid grid-cols-1 gap-4 lg:gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-4 dark:bg-gray-900">
        <x-board name="Products" value="{{ random_int(50, 10728) }}">
            <i class="fa-regular fa-people-group"></i>
        </x-board>
        <x-board name="Balance" currency="true" value="{{ random_int(1000, 101028) }}">
            <i class="fa-regular fa-wallet"></i>
        </x-board>
        <x-board name="Orders" value="{{ random_int(200, 25028) }}">
            <i class="fa-brands fa-product-hunt"></i>
        </x-board>
        <x-board name="Total Revenue" currency="true" value="{{ random_int(51780, 1502080) }}">
            <i class="fa-solid fa-money-bill"></i>
        </x-board>
        <x-board name="Total Reviews" value="{{ random_int(4, 108) }}">
            <i class="fa-regular fa-pen"></i>
        </x-board>

    </div>
</div>
