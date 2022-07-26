<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsDetails;
use App\Models\Products;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;


class ProductController extends Controller
{
    public function getProduct()
    {
        return ProductsDetails::with('product','product.category')->get();
    }

    public function destroyProduct($id)
    {
        $product = ProductsDetails::find($id);
        $product->delete();
        return redirect('/products');
    }

    public function storeProduct(ProductRequest $request)
    {
        $product = ProductsDetails::create($request->validated());
        Products::create(['product_details_id' => $product->id,
                        'category_id' => $request->category]);
        return new ProductResource($product);
    }

    // public function updateProduct(ProductRequest $request)
    // {
    //     $product = ProductsDetails::find($id);
    //     $product->update($request->validated());

    //     return new CompanyResource($company);
    // }
}
