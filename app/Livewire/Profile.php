<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

// use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    use WithFileUploads;
    public $firstname, $user, $uci, $dob, $gender, $language_id, $wallet, $surname, $title, $otp, $email, $phone, $role, $avatar, $current_password, $password, $password_confirmation, $cid, $email_verified_at;

    // protected $listeners = [
    //     'deleteConfirm' => 'delete',
    //     'deleteMutipleConfirm' => 'buckDelete'
    // ];

    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    function mount()
    {
        $this->firstname = auth()->user()->firstname;
        $this->surname = auth()->user()->surname;
        $this->parent_id = auth()->user()->parent_id;
        $this->uci = auth()->user()->uci;
        $this->otp = auth()->user()->otp;
        $this->dob = auth()->user()->profile->dob;
        $this->gender = auth()->user()->profile->gender;
        $this->language_id = auth()->user()->profile->language_id;
        $this->wallet = auth()->user()->profile->wallet;
        $this->current_role = auth()->user()->current_role;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->email_verified_at = auth()->user()->phone;
        $this->avatar = null;
        $this->user = auth()->user();
    }

    function changeProfileImage()
    {

        $this->validate(['avatar' => 'required|image|max:512']);

        // delete existing profile image if exist
        if ($this->user->avatar && Storage::exists($this->user->avatar)) {
            Storage::disk('public')->delete($this->user->avatar);
        }

        $url = $this->avatar->store('profile', 'public');

        $update = $this->user->update(['avatar' => $url]);

        if ($update) {
            $details = [
                'text' => 'Profile Image uploaded successfully',
                'title' => 'Uploaded',
            ];
            $this->reset('avatar');
            $this->dispatch('swal:success', details: sweetAlert(...$details));
            return redirect()->back();
        }

        return redirect()->back();
    }
    function removeProfilePicture()
    {
        dd(Storage::exists($this->user->avatar));
        // delete existing profile image if exist
        if ($this->user->avatar && Storage::exists($this->user->avatar)) {
            dd(Storage::exists($this->user->avatar));
            // Storage::disk('public')->delete($this->user->avatar);
        }

        $update = $this->user->update(['avatar' => null]);

        if ($update) {
            $details = [
                'text' => 'Profile Image removed successfully',
                'title' => 'Uploaded',
            ];
            $this->dispatch('swal:success', details: sweetAlert(...$details));
        }

        return redirect()->back();
    }
    function updateBio()
    {
        $data = $this->validate([
            'title' => ['nullable'],
            'firstname' => ['required'],
            'surname' => ['required'],
            'phone' => ['required', 'numeric', 'digits:10', 'starts_with:80,81,70,90,91,71'],
            'email' => ['required']
        ]);

        $saved = $this->user->update($data);
        $details = [
            'text' => 'Profile biodata updated successfully',
            'title' => 'Profile Saved'
        ];
        if ($saved) {
            $this->dispatch('swal:success', details: sweetAlert(...$details));
        }
    }
    function updatePassword()
    {
        $data = $this->validate(
            [
                'current_password' => ['required', 'current_password:web'],
                'password' => ['required', 'confirmed', Password::min(8)->mixedCase()],
            ],
            [
                'current_password.required' => 'Your current password field is required',
                'current_password.web' => 'Your current password is incorrect',
            ]
        );

        $saved = $this->user->update([
            'password' => Hash::make($data['password'])
        ]);

        if ($saved) {
            $this->reset([
                'password',
                'current_password'
            ]);
            $details = [
                'text' => 'Your password has been successfully changed~',
                'title' => 'Password Updated'
            ];
            $this->dispatch('swal:success', details: sweetAlert(...$details));
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}