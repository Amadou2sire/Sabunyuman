<div class="row">
    <div class="col-md-2">
        @extends('admin.admin_master')
    </div>



    <div class="col-md-10 py-5">

        <div class="container mt-5 ">
            <h4 class="pt-4">Edit Produit</h4>
            <div class="row">

                <div class="col-md-8">

                    {{-- @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}

                    <div class="card">
                        <div class="card-header">Edit Faq</div>
                        <div class="card-body">
                            <form action="{{ url('faq/update/' . $faq->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mt-4">
                                    <label for="inputtext" class="form-label">Question</label>
                                    <input type="text" name="question" value="{{ $faq->question }}"
                                        class="form-control" id="inputtext">
                                    @error('question')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="inputtext" class="form-label">Reponse</label>
                                    <input type="text" name="reponse" value="{{ $faq->reponse }}" class="form-control" id="inputtext">
                                    @error('reponse')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="souscription-select">Choisir la page:</label>

                                    <select name="souscription" id="souscription-select">
                                        <option value="">--Liste des souscriptions--</option>
                                        <option value="2roues">Assurance des 2 roues</option>
                                        <option value="automobile">Assurance Automobile</option>
                                        <option value="packmixte">Assurance Pack Mixte</option>
                                        <option value="voyageintegrale">Assurance Voyage Intégrale</option>                                        
                                    </select>
                                    @error('souscription')
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
