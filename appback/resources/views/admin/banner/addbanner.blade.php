
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
                <form action="{{ route('store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf                  

                    <div class="form-group">
                        <label for="formFile" class="form-label mt-3">Insérer l'image</label>
                        <input class="form-control" name="image" type="file" id="formFile">

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
