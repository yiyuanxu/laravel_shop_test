<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/7/18
 * Time: 14:09
 */
namespace App\Services;

use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartService
{
    public function get()
    {
        return Auth::user()->cartItems()->with(['productSku.product'])->get();
    }

    public function add($skuId,$amount)
    {
        $user = Auth::user();

        if($item = $user->cartItems()->where('product_sku_id',$skuId)->first()){
            $item->update([
                'amount' => $item->amount+$amount
            ]);
        }else{
            $item = new CartItem(['amount' => $amount]);
            $item->user()->associate($user);
            $item->productSku()->associate($skuId);
            $item->save();
        }

        return $item;
    }

    public function remove($skuIds)
    {
        if (!is_array($skuIds)) {
            $skuIds = [$skuIds];
        }
        Auth::user()->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
    }
}