<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;

class Coupons extends Component
{
    public $counter;
    public $coupon_id;
    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' =>'refresh'
    ];
    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function editCoupon($id)
    {
        $this->coupon_id = $id;
    }
    public function deleteCoupon($id)
    {
        $this->coupon_id = $id;
    }
    public function refresh()
    {
        $this->coupon_id = null;
    }

    public function render()
    {
        $coupons = Coupon::latest()->get();
        return view('livewire.admin.coupons.coupons', [
            'coupons' => $coupons,
        ]);
    }
}
