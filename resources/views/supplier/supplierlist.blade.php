@extends('layouts.main')

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Supplier List</h4>
            <h6>Manage your Suppliers</h6>
        </div>
        <div class="page-btn">
            <a href="{{ url('supplier/create') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img">Add Supplier</a>
        </div>
    </div>
    <!-- /product list -->
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="assets/img/icons/filter.svg" alt="img">
                            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Filter -->
            <div class="card" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Supplier Code">
                            </div>	
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Supplier Name">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-6 col-12  ms-auto">
                            <div class="form-group">
                                <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Filter -->
            <div class="table-responsive">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Supplier Name</th>
                            <th>code</th>
                            <th>Supplier</th>
                            <th>Phone</th>
                            <th>email</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer1.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">Thomas</a>
                            </td>
                            <td>201</td>
                            <td>Thomas</td>
                            <td>+12163547758 </td>
                            <td>thomas@example.com</td>
                            <td>USA</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer2.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">Benjamin</a>
                            </td>
                            <td>202</td>
                            <td>Benjamin</td>
                            <td>123-456-888</td>
                            <td>customer@example.com</td>
                            <td>USA</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer3.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">James</a>
                            </td>
                            <td>521</td>
                            <td>James</td>
                            <td>123-456-888</td>
                            <td>customer@example.com</td>
                            <td>USA</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer3.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">Bruklin</a>
                            </td>
                            <td>555</td>
                            <td>Bruklin</td>
                            <td>123-456-888</td>
                            <td>bruklin@example.com</td>
                            <td>Thailand</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer4.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">Beverly</a>
                            </td>
                            <td>325</td>
                            <td>Beverly</td>
                            <td>+12163547758 </td>
                            <td>Beverly@example.com</td>
                            <td>Phuket island</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer5.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">B. Huber</a>
                            </td>
                            <td>589</td>
                            <td>B. Huber	</td>
                            <td>123-456-888</td>
                            <td>Huber@example.com</td>
                            <td>Germany</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer6.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>254</td>
                            <td>James Stawberry</td>
                            <td>+12163547758 </td>
                            <td>customer@example.com</td>
                            <td>Angola</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-imgs">
                                    WC
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>681</td>
                            <td>Fred john</td>
                            <td>123-456-888</td>
                            <td>john@example.com</td>
                            <td>Albania</td>

                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer5.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">B. Huber</a>
                            </td>
                            <td>589</td>
                            <td>B. Huber	</td>
                            <td>123-456-888</td>
                            <td>Huber@example.com</td>
                            <td>Germany</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer6.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>254</td>
                            <td>James Stawberry</td>
                            <td>+12163547758 </td>
                            <td>customer@example.com</td>
                            <td>Angola</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-imgs">
                                    WC
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>681</td>
                            <td>Fred john</td>
                            <td>123-456-888</td>
                            <td>john@example.com</td>
                            <td>Albania</td>

                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer5.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">B. Huber</a>
                            </td>
                            <td>589</td>
                            <td>B. Huber	</td>
                            <td>123-456-888</td>
                            <td>Huber@example.com</td>
                            <td>Germany</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/customer/customer6.jpg" alt="product">
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>254</td>
                            <td>James Stawberry</td>
                            <td>+12163547758 </td>
                            <td>customer@example.com</td>
                            <td>Angola</td>
                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-imgs">
                                    WC
                                </a>
                                <a href="javascript:void(0);">James Stawberry</a>
                            </td>
                            <td>681</td>
                            <td>Fred john</td>
                            <td>123-456-888</td>
                            <td>john@example.com</td>
                            <td>Albania</td>

                            <td>
                                  
                                <a class="me-3" href="editcustomer.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /product list -->
</div>
    
@endsection