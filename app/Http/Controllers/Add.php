<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class Add extends Controller
{
    public function admin_add_cartegory()
    {
        return view('add_category');
    }
    public function ins_add_cartegory(Request $r)
    {
        $n = $r->Category_Name;
        $s = $r->Category_Status;

        $obj = new Category();
        $obj->category_name = $n;
        $obj->category_status = $s;
        $obj->save();
        return redirect('/select_category');
    }
    public function select_category()
    {
        $obj = Category::all();
        return view("show_category", with(["std" => $obj]));
    }
    public function delete_cartegory(Request $r)
    {
        $id = $r->id;
        $obj = Category::find($id);
        $obj->delete();
        return redirect('/select_category');
    }
    public function edit_cartegory(Request $r)
    {
        $id = $r->id;
        $obj = Category::find($id);
        return view('edit_category', with(["std" => $obj]));
    }
    public function update_cartegory(Request $r)
    {
        $n = $r->Category_Name;
        $s = $r->Category_Status;
        $id = $r->Category_ID;

        $obj = Category::find($id);
        $obj->category_name = $n;
        $obj->category_status = $s;
        $obj->save();
        return redirect('/select_category');
    }





    public function add_product()
    {
        $obj = Category::all();
        return view('add_product')->with(["std" => $obj]);
    }
    public function ins_add_product(Request $r)
    {
        $c = $r->Product_category;
        $n = $r->Product_Name;
        $p = $r->Product_Price;
        $d = $r->Product_Description;

        $img  = $r->file('Product_Image');
        if ($img) {
            $img_fn = time() . $img->getClientOriginalName();
            $img->move('product_img/', $img_fn);
        }

        $obj = new Products();
        $obj->category_id = $c;
        $obj->product_name = $n;
        $obj->product_price = $p;
        $obj->product_description = $d;
        $obj->product_image = $img_fn;
        $obj->save();
        return redirect('/select_product');
    }
    public function select_product()
    {
        $obj = Products::all();
        return view("show_product")->with(["std" => $obj]);
    }

    public function delete_product(Request $r)
    {
        $id = $r->id;
        $obj = Products::find($id);
        $obj->delete();
        unlink("product_img/" . $obj->product_image);
        return redirect('/select_product');
    }
    public function edit_product(Request $r)
    {
        $id = $r->id;
        $obj = Products::find($id);
        $cat = Category::all();
        return view('edit_product', with(["std" => $obj, "cat" => $cat]));
    }
    public function update_product(Request $r)
    {
        $c = $r->Product_category;
        $n = $r->Product_Name;
        $p = $r->Product_Price;
        $d = $r->Product_Description;
        $id = $r->id;

        $img  = $r->file('Product_Image');
        if ($img) {
            $img_fn = time() . $img->getClientOriginalName();
            $img->move('product_img/', $img_fn);
        }

        $obj = Products::find($id);
        $obj->category_id = $c;
        $obj->product_name = $n;
        $obj->product_price = $p;
        $obj->product_description = $d;
        if ($img) {
            unlink("product_img/" . $obj->product_image);
            $obj->product_image = $img_fn;
        }
        $obj->save();
        return redirect('/select_product');
    }

    public function one_product(Request $r)
    {
        $id = $r->id;
        $obj = Products::find($id);
        return view('one_product', with(["s" => $obj]));
    }

    public function add_to_cart(Request $r)
    {
        $pid = $r->input('pid');
        $uid = $r->input('uid');
        $cat = $r->input('category_id');
        $product_name = $r->input('product_name');
        $product_price = $r->input('product_price');
        $qty = $r->input('qty');
        $img = $r->input('image');

        // Check if the product already exists in the cart for the user
        $existingCartItem = Cart::where('uid', $uid)->where('pid', $pid)->first();

        if ($existingCartItem) {
            // Update the quantity if the product already exists in the cart
            $existingCartItem->qty += $qty;
            $existingCartItem->save();
        } else {
            // Add new item to the cart
            $obj = new Cart();
            $obj->uid = $uid;
            $obj->pid = $pid;
            $obj->category_name = $cat;
            $obj->cart_name = $product_name;
            $obj->cart_price = $product_price;
            $obj->qty = $qty;
            $obj->image = $img;
            $obj->save();
        }

        return redirect(url('/cart_view'));
    }

    public function cart_view()
    {
        $obj = Cart::all();
        return view('cart')->with(["std" => $obj]);
    }

    public function update_cart(Request $r, $id)
    {
        $cart = Cart::find($id);
        $cart->qty = $r->input('qty');
        $cart->save();
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }


}
