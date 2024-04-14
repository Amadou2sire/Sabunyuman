<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">

        <div class="container mt-5 ">
            <h4 class="pt-4">All Category</h4>
            <div class="row">

                <div class="col-md-8">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">All Category</div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Catégorie</th>
                                    <th scope="col">Utilisateur</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->user->name }}</td>
                                        <td>
                                            @if ($category->created_at == null)
                                                <span class="text-danger">Pas de date</span>
                                            @else
                                                {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                            @endif
                                        </td>

                                        <td>
                                            <a class=" btn btn-sm btn-warning"
                                                href="{{ url('category/edit/'.$category->id) }}">Modifier</a>
                                            <a class=" btn btn-sm btn-danger"
                                                href="{{ url('category/delete/'.$category->id) }}">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>




                    </div>
                    <div class="mt-4">
                        {{ $categories->links() }}
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="inputtext" class="form-label">Nom</label>
                                    <input type="text" name="category_name" class="form-control" id="inputtext">
                                    @error('category_name')
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
</x-app-layout>
