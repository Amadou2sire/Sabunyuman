<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <head> <script src={{ asset('js/tinymce/tinymce.min.js') }}></script>
        <script>
            tinymce.init({
                selector: 'textarea#mytextarea',
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | pagebreak | charmap emoticons |  preview save| insertfile image media template link anchor codesample | ltr rtl',
               
            });
        </script></head>

    <div class="py-12">

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
                        <div class="card-header">Edit Produit</div>
                        <div class="card-body">
                            <form action="{{ url('souscription/update/' . $souscription->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{$souscription->souscription_image}}">
                                <div>
                                    <label for="inputtext" class="form-label">Nom</label>
                                    <input type="text" name="souscription_name" value="{{ $souscription->souscription_name }}"
                                        class="form-control" id="inputtext">
                                    @error('souscription_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="inputtext" class="form-label">Description</label>
                                    <textarea type="text" name="souscription_description" value="{{ $souscription->souscription_description }}"
                                        class="form-control" id="mytextarea"></textarea>
                                    @error('souscription_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="inputtext" class="form-label">Image</label>
                                    <input type="file" name="souscription_image" class="form-control" id="inputtext">
                                    @error('souscription_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mt-2 form-group">
                                    <img src="{{asset($souscription->souscription_image)}}" style="width:70px; height:70px;">
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
</x-app-layout>
