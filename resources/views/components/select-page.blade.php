@props(['cnt'])
<select name="" wire:model.live='perPage' id="cnt"
    class="w-20 text-sm border border-gray-500 rounded shadow-sm ring-0 bg-gray-50 focus:ring-primary focus:border-0">
    @foreach (paginationLevel($cnt) as $pg)
        <option value="{{ $pg }}">{{ $pg }}</option>
    @endforeach
</select>
