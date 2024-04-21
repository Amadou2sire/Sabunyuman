{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    @extends('admin.admin_master')


    <head>
        <script src={{ asset('js/tinymce/tinymce.min.js') }}></script>
        <script>
            tinymce.init({
                selector: 'textarea#mytextarea',
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',

            });
        </script>
    </head>


    <div class="py-12">

        <div class="container mt-5 ">
            <h4 class="pt-4">Les souscriptions</h4>
            <div class="row">

                <div class="col-md-8">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">Les souscriptions</div>
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
                                            <a class=" btn btn-sm btn-warning mb-2"
                                                href="{{ url('souscription/edit/' . $souscription->id) }}">Modifier</a>
                                            <a class=" btn btn-sm btn-danger"
                                                href="{{ url('souscription/delete/' . $souscription->id) }}">Supprimer</a>
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


                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Ajouter un produit</div>
                        <div class="card-body">
                            <form action="{{ route('store.souscription') }}" method="POST"
                                enctype="multipart/form-data">
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
                                    <textarea type="text" name="souscription_description" class="form-control" id="mytextarea"></textarea>
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
        </div>
    </div>
    </div>
    </div>
{{-- </x-app-layout> --}}
