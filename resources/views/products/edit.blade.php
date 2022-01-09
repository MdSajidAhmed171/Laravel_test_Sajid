@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
    {{-- <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div> --}}
    <form action="{{ route('product.update') }}" method="post">
        @csrf
        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Product Name</label> 
                                <input type="text" v-model="product_name" placeholder="Product Name" class="form-control" value="{{ $product->title }}">
                            </div>
                            <div class="form-group">
                                <label for="">Product SKU</label>
                                <input type="text" v-model="product_sku" placeholder="Product Name" class="form-control" value="{{ $product->sku }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea v-model="description" id="" cols="30" rows="4" class="form-control" name="product_description"> {{ $product->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Media</h6>
                        </div>
                        {{-- <div class="card-body border">
                            <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
                        </div> --}}
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Variants</h6>
                        </div>
                        <div class="card-body">
                            <div class="row" v-for="(item,index) in product_variant">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Option</label>
                                        <select v-model="item.option" class="form-control">
                                            {{-- <option v-for="variant in variants"
                                                    :value="variant.id">
                                                {{ variant.title }}
                                            </option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label v-if="product_variant.length != 1"
                                               class="float-right text-primary"
                                               style="cursor: pointer;">Remove</label>
                                        <label v-else for="">.</label>
                                        <input-tag v-model="item.tags"  class="form-control"></input-tag>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" v-if="product_variant.length < variants.length && product_variant.length < 3">
                            <button  class="btn btn-primary">Add another option</button>
                        </div>
    
                        <div class="card-header text-uppercase">Preview</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>Variant</td>
                                        <td>Price</td>
                                        <td>Stock</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="variant_price in product_variant_prices">
                                        <td>
                                            @foreach ($product_varients as $product_varient)
                                                {{ $product_varient->variant }}
                                                <br> <br>
                                            
                                            @endforeach

                                        </td>
                                        
                                                
                                        <td>
                                            @foreach ($product_prices as $product_price)
                                            <input type="text" class="form-control" value="{{ $product_price->price }}">
                                            <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($product_prices as $product_price)
                                            <input type="text" class="form-control" value="{{ $product_price->stock }}">
                                            <br>
                                            @endforeach
                                        </td>
                                       
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-lg btn-primary">Update</button>
            {{-- <button type="button" class="btn btn-secondary btn-lg">Cancel</button> --}}
        </section>
    </form>
@endsection
