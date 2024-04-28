
<head>
    <script src={{ asset('js/tinymce/tinymce.min.js') }}></script>
    <script>
        tinymce.init({
            selector: 'textarea#mytextarea',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | pagebreak | charmap emoticons |  preview save| insertfile image media template link anchor codesample | ltr rtl',

        });
    </script>
</head>

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
                <form action="{{ route('store.souscription') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputtext" class="form-label">Produit name</label>
                        <input type="text" name="souscription_name" class="form-control" id="inputtext">
                        @error('souscription_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="inputtext" class="form-label">Produit description</label>
                        <textarea name="souscription_description" type="text" class="form-control" id="mytextarea"></textarea>
                        @error('souscription_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label mt-3">produit image</label>
                        <input class="form-control" name="souscription_image" type="file" id="formFile">

                        @error('souscription_image')
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
