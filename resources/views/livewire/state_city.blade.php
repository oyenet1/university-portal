<div class="col-md-8">
    <div class="form-row">
        {{-- <div class="col-md-6">
            <label style="font-size: 20px;font-weight: 500;" for="state_id">State
                @error('state_id')
                <span class="ml-2 invalid-feedback d-inline" role="alert">
                    <strong>- {{$message}}</strong>
                </span>
                @enderror
            </label>
            <select name="state_id" wire:model.live="state_id"
                class="form-control w-100 @error('state') is-invalid @enderror" id="state_id">
                <option selected>No states</option>
                @forelse (\App\Models\Province::select('id', 'state')->get() as $province)
                <option value="{{$province->id}}">{{$province->state}}</option>
                @empty
                <option selected>No states</option>
                @endforelse
            </select>
        </div>
        <div class="col-md-6">
            <label style="font-size: 20px;font-weight: 500;" for="city_id">City
                @error('city_id')
                <span class="ml-2 invalid-feedback d-inline" role="alert">
                    <strong>- {{$message}}</strong>
                </span>
                @enderror
            </label>
            <select name="city_id" wire:model.live="city_id"
                class="form-control w-100 @error('city_id') is-invalid @enderror" id="city_id">
                @forelse (\App\Models\City::select('id', 'name')->where('province_id', $state_id)->get() as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @empty
                <option>Select State First</option>
                @endforelse
            </select>
        </div> --}}
        <button wire:click.prevent='done'>click</button>
        <div class="col-md-6">
            <label for="state_c">State {{ $ops }}
                @error('state')
                    <span class="ml-2 invalid-feedback d-inline" role="alert">
                        <strong>- {{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <select name="state" wire:model.live='ops' class=" w-100 @error('state') is-invalid @enderror" id="state_c"
                required="">
                @foreach ($states as $province)
                    <option value="{{ $province->id }}">{{ $province->state }}</option>
                @endforeach
            </select>
        </div>
        @if ($ops)
            <div class="col-md-6">
                <label for="city">City
                    @error('city_id')
                        <span class="ml-2 invalid-feedback d-inline" role="alert">
                            <strong>- {{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <select name="city_id" class="form-control w-100 @error('city_id') is-invalid @enderror" id="city"
                    required="">
                    <option value="0">First select state</option>
                    @foreach (\App\Models\City::where('province_id', $ops)->get() as $item)
                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>
</div>
