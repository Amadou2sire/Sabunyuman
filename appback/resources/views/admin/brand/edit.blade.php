<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">

        <div class="container mt-5 ">
            <h4 class="pt-4">Edit Brand</h4>
            <div class="row">

                <div class="col-md-8">

                    {{-- @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}

                    <div class="card">
                        <div class="card-header">Edit Brand</div>
                        <div class="card-body">
                            <form action="{{ url('brand/update/' . $brands->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
                                <div>
                                    <label for="inputtext" class="form-label">Nom</label>
                                    <input type="text" name="brand_name" value="{{ $brands->brand_name }}"
                                        class="form-control" id="inputtext">
                                    @error('brand_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="inputtext" class="form-label">Image</label>
                                    <input type="file" name="brand_image" class="form-control" id="inputtext">
                                    @error('brand_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2 form-group">
                                    <img src="{{asset($brands->brand_image)}}" style="width:70px; height:70px;">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
