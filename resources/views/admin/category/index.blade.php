<x-backend-layout>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Categories</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-2 d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Create Category</h4>
                            <a href="{{route('admin.category.create')}}" class="btn btn-dark waves-effect waves-light">Create</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Views</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)                                        
                                        <tr>
                                            <th>{{ $categories->firstItem() + $loop->index }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td><span class="badge badge-soft-success">{{ $category->views }}</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <form action="{{ route('admin.category.edit', $category->id) }}" method="get">
                                                        <button class="btn btn-sm btn-primary">Edit</button>
                                                    </form>
                                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <th colspan="4">No data found</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{ $categories->links() }}
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!--- end row -->

    </div> <!-- container -->

    <x-slot:script>
    </x-slot:script>
</x-backend-layout>