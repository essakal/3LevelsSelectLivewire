<div>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">Countries</label>
        <div class="col-md-6">
            <select wire:model="selectedState" wire:click="init"  class="form-control">
                <option value="" selected>Choose country</option>
                @foreach ($Countries as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <select class="form-control" wire:model="selectedRue" name="city_id">
                    <option value="" selected>Choose city</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        {{-- {{ $selectedState == null }} --}}
                        {{ $selectedRue == null }}
                    @endforeach
                </select>
            </div>
        </div>
    @endif
    @if (!is_null($selectedRue))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <select class="form-control" name="city_id">
                    <option value="" selected>Choose city</option>
                    @foreach ($rues as $rue)
                        <option value="{{ $rue->id }}">{{ $rue->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
