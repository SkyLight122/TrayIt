<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

new class extends Component {
    use WithFileUploads;
    public $username, $full_name, $phone_number, $image, $email, $password, $confirm_password;

    public function register()
    {
        $this->resetErrorBag();

        $this->validate(
            [
                'username' => 'required|string|max:255|unique:users,username',
                'full_name' => 'required|string|max:255',
                'phone_number' => 'required|digits_between:9,12',
                'email' => 'required|email|string|max:255|unique:users,email',
                'password' => 'required|string|min:8',
                'confirm_password' => 'required|string|min:8|same:password',
            ],
            [
                'username.required' => 'Username is required.',
                'username.unique' => 'This username is already taken.',

                'full_name.required' => 'Full name is required.',

                'phone_number.required' => 'Phone number is required.',
                'phone_number.digits_between' => 'Phone number must contain between 9 and 12 digits.',

                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email address is already registered.',

                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',

                'confirm_password.required' => 'Password confirmation is required.',
                'confirm_password.same' => 'Password confirmation does not match.',
            ],
        );

        $image_path = null;

        if ($this->image) {
            $this->validate(
                [
                    'image' => 'file|image|max:2048|mimes:jpg,jpeg,png',
                ],
                [
                    'image.image' => 'The uploaded file must be an image.',
                    'image.mimes' => 'Image format must be JPG or PNG.',
                    'image.max' => 'Image size must not exceed 2MB.'
                ],
            );
            $image_path = $this->image->store('photo_profile', 'public');
        }
        User::create([
            'username' => $this->username,
            'full_name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'image_path' => $image_path ?: null,
        ]);
    }
};
?>

<div>
    {{-- It always seems impossible until it is done. - Nelson Mandela --}}
</div>
