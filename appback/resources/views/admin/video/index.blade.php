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
                    <h4 class="pt-5">Les Vidéos</h4>    
    
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
                                <a class="btn btn-success" href="{{ url('video/add_video') }}"> Ajouter une vidéo</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Video name</th>
                                    <th scope="col">Video description</th>
                                    <th scope="col">Iframe</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <th scope="row">{{ $video->id }}</th>
                                        <td>{{ $video->name }}</td>
                                        <td class="text-wrap">
                                            {{ substr($video->description, 0, 10) }}{{ strlen($video->description) > 10 ? '...' : '' }}
                                        </td>
                                        <td><img src="{{ asset($video->iframe) }}"
                                                alt="{{ $video->name }}"
                                                style="width: 70px; height:70px"></td>
                                        <td>
                                            @if ($video->created_at == null)
                                                <span class="text-danger">Pas de date</span>
                                            @else
                                                {{ Carbon\Carbon::parse($video->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row mb-3 ">
                                                <a class=" btn btn-sm btn-warning m-1"
                                                    href="{{ url('video/edit/' . $video->id) }}">Modifier</a>
                                                <a class=" btn btn-sm btn-danger m-1"
                                                    href="{{ url('video/delete/' . $video->id) }}">Supprimer</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    
                    <div class="mt-4">
                        {{ $videos->links() }}
                    </div>    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- </x-app-layout> --}}
    