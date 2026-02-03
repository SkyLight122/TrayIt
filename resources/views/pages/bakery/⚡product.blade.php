<?php

use Livewire\Component;
use App\Models\Product;
use App\Models\Bakery;

new class extends Component
{
    public $name, $bakery_id, $price, $description, $cake_type_id, $preorder;

    public function mount(Bakery $bakery){
        $this->bakery_id = $bakery->id;
    }

    public function products(){
        return Product::where('bakery_id', $this->bakery_id)->get();
    }

    public function create(){
        $this->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string',
            'cake_type_id' => 'required',
        ],[
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be valid text.',
            'name.max' => 'Product name may not be longer than 255 characters.',
            'description.required' => 'Description is required.',
            'description.string' => 'Description must be valid text.',
            'cake_type_id.required' => 'Please select a cake type.',
        ]);
        Product::create([
            'name' => $this->name,
            'bakery_id' => $this->bakery_id,
            'price' => 0,
            'description' => $this->description,
            'cake_type_id' => $this->cake_type_id,
            'preorder' => false
        ]);
    }

    public function delete($id){
        Product::where('bakery_id', $this->bakery->id)->findOrFail($id)->delete();
    }
};
?>

<div>
    {{-- Life is available only in the present moment. - Thich Nhat Hanh --}}
</div>
