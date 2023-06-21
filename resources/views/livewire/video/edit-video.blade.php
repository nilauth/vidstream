<div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

    <form wire:submit.prevent="update">

        <div class="form-group mb-2">
            <label for="title" class="mt-2">Title</label>
            <input type="text" class="form-control" wire:model="video.title">
        </div>

        @error('video.title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group mt-3">
            <label for="description" class="mt-2">Description</label>
            <textarea cols="30" rows="4" class="form-control" wire:model="video.description"></textarea>
        </div>

        @error('video.description')
        <div class="alert alert-danger">
            {{ $message }}b
        </div>
        @enderror


        <div class="form-group mt-3">
            <label for="visibility" class="mt-2">Visibility</label>

            <select wire:model="video.visibility" class="form-control">
                <option value="private">private</option>
                <option value="public">public</option>
                <option value="unlisted">unlisted</option>

            </select>

        </div>

        @error('video.description')
        <div class="alert alert-danger">
            {{ $message }}b
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
        </div>

    </div>

</div>
