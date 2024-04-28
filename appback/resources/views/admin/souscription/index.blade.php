{{-- <x-app-layout> --}}
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}


<div class="py-12">
    <div class="row">
        <div class="col-md-2">
            @extends('admin.admin_master')
        </div>
        <div class="col-md-10">
            <div class="container mt-5 ">
                <h4 class="pt-5">Les souscriptions</h4>




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
                            <a class="btn btn-success" href="{{ url('souscription/add_product') }}"> Ajouter un produit</a>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Souscription name</th>
                                <th scope="col">Souscription description</th>
                                <th scope="col">Souscription image</th>
                                <th scope="col">Date de création</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($souscriptions as $souscription)
                                <tr>
                                    <th scope="row">{{ $souscription->id }}</th>
                                    <td>{{ $souscription->souscription_name }}</td>
                                    <td class="text-wrap">
                                        {{ substr($souscription->souscription_description, 0, 10) }}{{ strlen($souscription->souscription_description) > 10 ? '...' : '' }}
                                    </td>
                                    <td><img src="{{ asset($souscription->souscription_image) }}"
                                            alt="{{ $souscription->souscription_name }}"
                                            style="width: 70px; height:70px"></td>
                                    <td>
                                        @if ($souscription->created_at == null)
                                            <span class="text-danger">Pas de date</span>
                                        @else
                                            {{ Carbon\Carbon::parse($souscription->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex flex-row mb-3 ">
                                            <a class=" btn btn-sm btn-warning m-1"
                                                href="{{ url('souscription/edit/' . $souscription->id) }}">Modifier</a>
                                            <a class=" btn btn-sm btn-danger m-1"
                                                href="{{ url('souscription/delete/' . $souscription->id) }}">Supprimer</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $souscriptions->links() }}
                </div>






            </div>
        </div>
    </div>
</div>
</div>
</div>
{{-- </x-app-layout> --}}
