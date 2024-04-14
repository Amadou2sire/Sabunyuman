<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">

        <div class="container mt-5">
            <h4 class="pt-4">Multi picture</h4>
            <div class="row">

                <div class="col-md-8  shadow">

                    <div class="card-group">

                        @foreach ($images as $multi)
                            <div class="col-md-4 mt-5">
                                <div class="card m-2">
                                    <img src="{{asset($multi->image)}}" alt="image">
                                </div>
                            </div>
                        @endforeach



                    </div>

                </div>


                <div class="col-md-4  shadow">
                    <div class="card">
                        <div class="card-header">Multi picture</div>
                        <div class="card-body">
                            <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="formFile" class="form-label mt-3">Brand image</label>
                                    <input class="form-control" name="image[]" type="file" id="formFile"
                                        multiple="">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
