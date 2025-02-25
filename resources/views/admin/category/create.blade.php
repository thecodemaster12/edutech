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
                            <a href="{{route('admin.category.index')}}" class="btn btn-dark waves-effect waves-light">Back</a>
                        </div>

                        <form method="POST" action="{{route('admin.category.store')}}">
                            @csrf
                            <div class="mb-4">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <input type="text" name="name" class="form-control w-50" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Category Name" value="{{old('name')}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </div> <!-- container -->
</x-backend-layout>