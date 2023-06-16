<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;

class Order extends Model {
    use HasFactory;

        public static function getOrders() {
            $result = Order::all();


            foreach($result as $key => $order) {
                $order["products"] = [];
                $product_ids = [];
                foreach(explode(",", $result[$key]["product_ids"]) as $product_id) {
                    if (array_key_exists($product_id, $product_ids)) {
                        $product_ids[$product_id]++;
                    } else {
                        $product_ids[$product_id] = 1;
                    }
                }

                foreach($product_ids as $product_id => $product_count) {
                    $product = Product::find($product_id);
                    $products = $order["products"];
                    array_push($products, [
                        'count' => $product_count,
                        'cost' => $product_count * $product["cost"],
                        'name' => $product["name"],
                        "image_path" => $product["image_path"],
                    ]);

                    
                    $order["products"] = $products;
                    
                }
                $result[$key] = $order;
            }

            return $result->toArray();

        }

}
