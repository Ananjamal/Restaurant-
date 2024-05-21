<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;

class Edit extends Component
{
    public $coupon_id;
    public $coupon;
    public $code;
    public $discount_amount;
    public $valid_from;
    public $valid_until;
    public function mount($id){
        $this->coupon_id = $id;
        $this->coupon = Coupon::find($id);
        $this->code = $this->coupon->code;
        $this->discount_amount = $this->coupon->discount_amount;
        $this->valid_from = $this->coupon->valid_from;
        $this->valid_until = $this->coupon->valid_until;
    }
    public function UpdateCoupon(){
        $this->validate([
            'code' => 'min:4',
            'discount_amount' => 'min:1|numeric',
            'valid_from' => 'date',
            'valid_until' => 'date',
        ]);
        $data = [
            'code' => $this->code,
            'discount_amount' => $this->discount_amount,
            'valid_from' => $this->valid_from,
            'valid_until' => $this->valid_until,
        ];
        $this->coupon->update($data);
        $this->reset(['code', 'discount_amount', 'valid_from', 'valid_until']);
        $message = 'Coupon successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'EditCoupon'); // Emit event to notify JS
    }
    public function render()
    {
        return view('livewire.admin.coupons.edit');
    }
}
