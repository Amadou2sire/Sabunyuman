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
                <form action="{{ route('store.faq') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputtext" class="form-label">Question</label>
                        <input type="text" name="question" class="form-control" id="inputtext">
                        @error('question')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="inputtext" class="form-label">Réponse</label>
                        <textarea name="reponse" type="text" class="form-control" id="mytextarea"></textarea>
                        @error('reponse')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="souscription-select">Choisir la page:</label>

                        <select name="souscription" id="souscription-select">
                            <option value="">--Liste des souscriptions--</option>
                            <option value="accueil">Accueil</option>
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
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
