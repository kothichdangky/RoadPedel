<form class="mb-4" wire:submit="{{$method}}">
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @csrf
    <div class="mb-3 bg-white rounded border p-3">
        <label for="{{$inputId}}" class="form-label visually-hidden">{{$inputLabel}}</label>
        <textarea id="{{$inputId}}" rows="6"
                  class="form-control"
                  placeholder="Write a comment..."
                  wire:model.live="{{$state}}.body"
                  oninput="detectAtSymbol()"
        ></textarea>
        @if(!empty($users) && $users->count() > 0)
            @include('commentify::livewire.partials.dropdowns.users')
        @endif
        {{-- @error($state.'.body')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror --}}
    </div>

    <button wire:loading.attr="disabled" type="submit"
            class="btn btn-primary">
        <div wire:loading wire:target="{{$method}}">
            @include('commentify::livewire.partials.loader')
        </div>
        {{$button}}
    </button>
</form>
