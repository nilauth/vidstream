<div>



    @if ($channel->image)
        <img src="{{asset('images' . '/' . $channel->image)}}" alt="">
    @endif

    <form wire:submit.prevent="update">

        <div class="form-group mb-2">
            <label for="name" class="mt-2">Name</label>
            <input type="text" class="form-control" wire:model="channel.name">
        </div>

        @error('channel.name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group mt-3 mb-2">
            <label for="slug" class="mt-2">Slug</label>
            <input type="text" class="form-control" wire:model="channel.slug">
        </div>

        @error('channel.slug')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

        <div class="form-group mt-3">
            <label for="description" class="mt-2">Description</label>
            <textarea cols="30" rows="4" class="form-control" wire:model="channel.description"></textarea>
        </div>

        @error('channel.description')
        <div class="alert alert-danger">
            {{ $message }}b
        </div>
    @enderror

    <div class="form-group mt-3">
        <input type="file" wire:model="image">
    </div>

    <div class="form-group">
        @if (@$image)
        Image Preview:
        <img src="{{$image->temporaryUrl()}}" class="img-thumbnail">

        @endif
    </div>

    @error('image')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

        <div class="form-group mt-3 mb-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

    </form>
</div>
