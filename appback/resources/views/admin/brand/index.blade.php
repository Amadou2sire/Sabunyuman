<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">

        <div class="container mt-5 ">
            <h4 class="pt-4">All Brand</h4>
            <div class="row">

                <div class="col-md-8">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">All Brand</div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Brand name</th>
                                    <th scope="col">Brand image</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <th scope="row">{{ $brand->id }}</th>
                                    <td>{{ $brand->brand_name }}</td>
                                    <td><img src="{{ asset($brand->brand_image) }}" alt="{{ $brand->brand_name }}" style="width: 70px; height:70px"></td>
                                    <td>
                                        @if ($brand->created_at == null)
                                            <span class="text-danger">Pas de date</span>
                                        @else
                                            {{ Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a class=" btn btn-sm btn-warning" href="{{ url('brand/edit/' . $brand->id) }}">Modifier</a>
                                        <a class=" btn btn-sm btn-danger" href="{{ url('brand/delete/' . $brand->id) }}">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>




                    </div>
                    <div class="mt-4">
                        {{ $brands->links() }}
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Brand</div>
                        <div class="card-body">
                            <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="inputtext" class="form-label">Brand name</label>
                                    <input type="text" name="brand_name" class="form-control" id="inputtext">
                                    @error('brand_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label mt-3">Brand image</label>
                                    <input class="form-control" name="brand_image" type="file" id="formFile">

                                    @error('brand_image')
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
