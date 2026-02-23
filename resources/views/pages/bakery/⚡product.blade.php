<?php

use Livewire\Component;
use App\Models\Product;
use App\Models\Bakery;
use App\Models\ProductVariant;

new class extends Component
{
    public $name, $bakery_id, $price, $stock, $description, $cake_type_id;
    public $preorder = false;
    public $images = [];
    public $selectedIndex;
    public $variants = [];

    public function mount(Bakery $bakery){
        $this->bakery_id = $bakery->id;
    }

    public function products(){
        return Product::where('bakery_id', $this->bakery_id)->get();
    }

    public function selectIndex($index){
        $this->selectedIndex = $index;
    }

    public function create(){
        $this->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string|max:1000',
            'cake_type_id' => 'required',
        ],[
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be valid text.',
            'name.max' => 'Product name may not be longer than 255 characters.',
            'description.max' => 'Product name may not be longer than 1000 characters.',
            'description.required' => 'Description is required.',
            'description.string' => 'Description must be valid text.',
            'cake_type_id.required' => 'Please select a cake type.',
        ]);
        $product = Product::create([
            'name' => $this->name,
            'bakery_id' => $this->bakery_id,
            'price' => 0,
            'description' => $this->description,
            'cake_type_id' => $this->cake_type_id,
            'preorder' => false
        ]);
        foreach($this->variants as $variant){
            ProductVariant::create([
                'product_id' => $product->id,
                'variant' => $variant->variant,
                'price' => $variant->price,
                'stock' => $variant->stock
            ]);
        }
    }

    public function addVariant($variant, $price, $stock){
        $this->variants[] = [
            'variant' => $variant,
            'price' => $price,
            'stock' => $stock
        ]
    }

    public function delete($id){
        Product::where('bakery_id', $this->bakery->id)->findOrFail($id)->delete();
    }
};
?>

<div>
    {{-- Life is available only in the present moment. - Thich Nhat Hanh --}}
</div>
