@extends('layouts/'.$template)


@section('content')

    <main class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Products List</li>
                    </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('admin-add-product') }}" class="btn btn-primary">Добавить новый товара</a>
                    </div>
                </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-header py-3">
                    <div class="row align-items-center m-0">
                        <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <select class="form-select">
                                <option>All category</option>
                                <option>Fashion</option>
                                <option>Electronics</option>
                                <option>Furniture</option>
                                <option>Sports</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-6">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-2 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <td></td>
                                <td>Название товара</td>
                                <td>Стоимость</td>
                                <td>Количество</td>
                                <td>Статус</td>
                                <td>Дата добавления</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $product)
                                <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td class="productlist">
                                    <a class="d-flex align-items-center gap-2" href="#">
                                    <div class="product-box">
                                        <img src="https://via.placeholder.com/400X300" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-0 product-title">{{ $product->name }}</h6>
                                    </div>
                                    </a>
                                </td>
                                <td>
                                    <span>{{ $product->price }} руб.</span> 

                                    @if($product->old_price)
                                        <s><span>{{ $product->old_price }} руб.</span></s>
                                    @endif
                                </td>
                                
                                <td><span>{{ $product->count }} шт</span></td>
                                
                                <td>
                                    @if($product->status == 1)
                                        <span class="badge rounded-pill alert-success">в продаже</span>
                                    @else   
                                        <span class="badge rounded-pill alert-danger">снят с продажи</span>
                                    @endif
                                </td>
                                <td><span>5-31-2020</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                                </tr>
                            @endforeach

                           
                        </tbody>
                        </table>
                    </div>

                <nav class="float-end mt-4" aria-label="Page navigation">
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

    </main>
@endsection