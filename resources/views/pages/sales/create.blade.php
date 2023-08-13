@extends('layouts.dashboard', ['pageTitle' => 'Create Product'])


@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0 ">
                        <h4 class="card-title mb-0 ">Create New Sale</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{ route('sales.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-2">
                                    <div class=" col-12 mb-2 ">
                                        <h5>Client Info:</h5>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <x-forms.input name="name" label="Client Name"
                                            placeholder="Name of the client?" />
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <x-forms.input name="address" label="Street 1" placeholder="Street 1" />
                                            </div>
                                            <div class="col-6">
                                                <x-forms.input name="address" label="Street 2" placeholder="Street 2" />
                                            </div>
                                            <div class="col-4">
                                                <x-forms.input name="address" label="City Name" placeholder="City name" />
                                            </div>
                                            <div class="col-4">
                                                <x-forms.input name="address" label="State/Region"
                                                    placeholder="State/Region name" />
                                            </div>
                                            <div class="col-4">
                                                <x-forms.input name="address" label="Postal Code"
                                                    placeholder="Postal Code" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 mt-4 mb-2 ">
                                        <h5>Product Details:</h5>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="row">
                                            <div class="col-9">
                                                <x-forms.input name="product" label="Search Product"
                                                    placeholder="Type your product name" />
                                            </div>
                                            <div class="col-2">
                                                <x-forms.input name="product" label="Quantity" placeholder="Ex: 5" />
                                            </div>
                                            <div class="col-1">
                                                <button id="add-new-product" class=" btn icon btn-primary mt-30 ">
                                                    <i class="bi bi-plus-circle-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 mt-4 mb-2 ">
                                        <h6>Product List:</h6>
                                    </div>
                                    <div class="col-12 ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Costing</th>
                                                    <th scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dell vostro 5720 I5/8GB/256GB SSD/ 2Gb Nvidia</td>
                                                    <td>3</td>
                                                    <td>73,000</td>
                                                    <td>85,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Asus Vivobook X515KA Celeron N4500 15.6" FHD Laptop</td>
                                                    <td>2</td>
                                                    <td>55,000</td>
                                                    <td>65,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Acer Extensa 15 EX215-54-37AH Core i3 11th Gen 15.6" FHD Laptop</td>
                                                    <td>3</td>
                                                    <td>73,000</td>
                                                    <td>85,000</td>
                                                </tr>
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td>Sub Total:</td>
                                                  <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td>Tax %:</td>
                                                  <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td>Fees/discounts:</td>
                                                  <td>$0.00</td>
                                                </tr>
                                                <tr class=" bg-light-secondary ">
                                                  <td></td>
                                                  <td></td>
                                                  <td><h6 class=" text-primary mb-0 ">Total:</h6></td>
                                                  <td class=" text-primary fw-bold ">4,87,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection