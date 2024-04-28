<div class="row">
    <div class="col-md-2">
        @extends('admin.admin_master')
    </div>

    <div class="col-md-10 py-5 mt-5">
        <div class="card">
            <div class="row d-flex">
                {{-- <div class="card-header">Ajouter un produit </div> --}}
                <div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary m-5">Retour</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('store.video') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputtext" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputtext">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputtext" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" id="mytextarea">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputtext" class="form-label">Lien Youtube</label>
                        <input name="iframe" type="text" class="form-control" id="mytextarea">
                        @error('iframe')
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
