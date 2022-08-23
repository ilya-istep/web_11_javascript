@extends('layout.'.$template)

@section('content')
<!-- Modal удаления категории -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteCategoryModalLabel">Удаление категории</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Вы точно хотите удалить эту категорию?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
        <form action="" method="post">
            @csrf
            <input type="text" name="category_id">
            <button type="button" class="btn btn-primary">Удалить</button>
        </form>
      </div>
    </div>
  </div>
</div>

<main class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
    </nav>
    </div>
    <div class="ms-auto">
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
        <a class="dropdown-item" href="javascript:;">Another action</a>
        <a class="dropdown-item" href="javascript:;">Something else here</a>
        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
    </div>
    </div>
</div>
<!--end breadcrumb-->

    <div class="card">
    <div class="card-header py-3">
        <h6 class="mb-0">Add Product Category</h6>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-12">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ошибка!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ошибка!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Успех!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </div>

            <div class="col-12 col-lg-4 d-flex">
            <div class="card border shadow-none w-100">
                <div class="card-body">
                <form class="row g-3" action="/admin/add-category" method="post">
                        @csrf
                    <div class="col-12">
                    <label class="form-label">Название</label>
                    <input type="text" name="name" class="form-control" placeholder="Category name">
                    </div>
                <div class="col-12">
                    <label class="form-label">Родительская категория</label>
                    <select class="form-select">
                    <option>Fashion</option>
                    <option>Electronics</option>
                    <option>Furniture</option>
                    <option>Sports</option>
                    </select> 
                </div>
                <div class="col-12">
                    <label class="form-label">Описание</label>
                    <textarea class="form-control" name="description" rows="3" cols="3" placeholder="Product Description"></textarea>
                </div>
                <div class="col-12">
                    <div class="d-grid">
                    <button class="btn btn-primary">Add Category</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
            </div>
            <div class="col-12 col-lg-8 d-flex">
            <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                        <th><input class="form-check-input" type="checkbox"></th>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Кол-во товаров</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($categories as $category)
                            <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>#{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ count($category->products) }}</td>
                            <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger btn_delete_category" data-id="{{ $category->id }}" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                            </td>
                            </tr>
                            <tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <nav class="float-end mt-0" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </div><!--end row-->
    </div>
    </div>

</main>

    <!-- <script>
        let btns = document.querySelectorAll(".btn_delete_category");

        for(let btn of btns){
            btn.addEventListener('click', function(evt){
                let link = evt.target.parentElement;
                link.getAttribute('data-id');
                document.querySelector(#deleteCategoryModal);
            });
        }
    </script> -->

@endsection