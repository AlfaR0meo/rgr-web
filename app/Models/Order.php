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

            foreach($result as $key => $value) {
                $result[$key]["products"] = [];
                $product_ids = [];
                foreach(explode($result[$key]["product_ids"], ",") as $product_id) {
                    if (array_key_exists($product_id, $product_ids)) {
                        $product_ids[$product_id]++;
                    } else {
                        $product_ids[$product_id] = 1;
                    }
                }

                foreach($product_ids as $product_id => $product_count) {
                    $product = Product::find($product_id);
                    array_push($result[$key]["products"], [
                        'count' => $product_count,
                        'cost' => $product_count * $product["cost"],
                        'name' => $product["name"]
                    ]);
                }
            }

            return $result;

        }

}
