<div class="w-full pt-6 space-y-4 lg:space-y-6">
    <x-greeting />
    <div class="grid grid-cols-1 gap-4 lg:gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-4 dark:bg-gray-900">
        <x-board name="All Users" value="{{ \App\Models\User::count() }}">
            <i class="fa-regular fa-users"></i>
        </x-board>
        <x-board name="Shops" value="{{ random_int(10, 1028) }}">
            <i class="fa-brands fa-shopify"></i>
        </x-board>
        <x-board name="Products" value="{{ random_int(78000, 14501028) }}">
            <i class="fa-brands fa-product-hunt"></i>
        </x-board>
        <x-board name="Orders" value="{{ random_int(2000, 4501028) }}">
            <i class="fa-regular fa-people-group"></i>
        </x-board>
        <x-board name="Total Sales" currency="true" value="{{ random_int(1780, 140102080) }}">
            <i class="fa-solid fa-money-bill-trend-up"></i>
        </x-board>
        <x-board name="Visitors" value="{{ random_int(1078000, 5450100028) }}">
            <i class="fa-regular fa-user-group"></i>
        </x-board>
    </div>
</div>
