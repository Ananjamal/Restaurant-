<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;

class Delete extends Component
{
    public $coupon;
    public $coupon_id;
    public function mount($id)
    {
        $this->coupon_id = $id;
        $this->coupon = Coupon::find($id);
    }
    public function delete()
    {
        $this->coupon->delete();

        $message = 'Coupon Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteCoupon');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }

    public function render()
    {
        return view('livewire.admin.coupons.delete');
    }
}
