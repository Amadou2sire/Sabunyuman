<div class="row">
    <div class="col-md-2">
        @extends('admin.admin_master')
    </div>
    <div class="col-md-10">
        <div class="container mt-5">
            <h4 class="pt-5">Les FAQ</h4>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="d-flex">
                    {{-- <div class="card-header pb-5">Les souscriptions</div> --}}
                    <div class="m-3">
                        <a class="btn btn-success" href="{{ url('faq/add_faq') }}"> Ajouter un Faq</a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Questions</th>
                            <th scope="col">Réponse</th>
                            <th scope="col">Souscription</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <th scope="row">{{ $faq->id }}</th>
                                <td>{{ $faq->question }}</td>
                                <td class="text-wrap">
                                    {{ substr($faq->reponse, 0, 10) }}{{ strlen($faq->reponse) > 10 ? '...' : '' }}
                                </td>
                                <td>{{ $faq->souscription }}</td>
                                <td>
                                    @if ($faq->created_at)
                                        {{ $faq->created_at->format('d/m/Y') }}
                                    @else
                                        <span class="text-danger">Pas de date</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-row mb-3 ">
                                        <a class=" btn btn-sm btn-warning m-1"
                                            href="{{ url('faq/edit/' . $faq->id) }}">Modifier</a>
                                        <a class=" btn btn-sm btn-danger m-1"
                                            href="{{ url('faq/delete/' . $faq->id) }}">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $faqs->links() }}
            </div>
        </div>
    </div>
</div>
