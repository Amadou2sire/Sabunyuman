<div class="row">
    <div class="col-md-2">
        @extends('admin.admin_master')
    </div>



    <div class="col-md-10 py-5">

        <div class="container mt-5 ">
            <h4 class="pt-4">Edit La video</h4>
            <div class="row">

                <div class="col-md-8">

                    {{-- @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}

                    <div class="card">
                        <div class="card-header">Edit Produit</div>
                        <div class="card-body">
                            <form action="{{ url('video/update/' . $videos->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mt-4">
                                    <label for="inputtext" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ $videos->name }}"
                                        class="form-control" id="inputtext">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <label for="inputtext" class="form-label">Description</label>
                                    <input type="text" name="description" value="{{ $videos->description }}" class="form-control" id="inputtext">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>  

                                <div class="mt-4">
                                    <label for="inputtext" class="form-label">Iframe</label>
                                    <input type="text" name="iframe" value="{{ $videos->iframe }}" class="form-control" id="inputtext">
                                    @error('iframe')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
</div>
