<div class="max-w-[350px] w-[150px] border rounded-sm shadow-sm bg-white flex hidden flex-col" id="apps-dropdown">
    <p class="py-2 text-xl font-medium text-center border-b">Switch Role</p>
    @foreach (auth()->user()->roles()->select('id', 'name')->get() as $role)
        <button wire:key="{{ $role->id }}" wire:click="switchRole({{ $role->name }})" class="p-2 capitalize">
            <span class="">{{ $role->name }}</span>
            @if (auth()->user()->current_role == $role->name)
                <span class="ml-2 text-green-500">
                    <i class="fa fa-circle-check"></i>
                </span>
            @endif
        </button>
    @endforeach
</div>

@push('script')
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
